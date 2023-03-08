Route::group(['prefix'=>'dev-specific-mode'], function(){
    Route::get('crawl', function (){ 
        return view('dev-show',['mode' => 'zzzzzzzzzzz']);
    });
    Route::post('{code}/crawl/{start}/{end}', function($code,$start,$end){

        ini_set('max_execution_time', 9999);


        $pageNumber = $end/2;
        $all_data_post = \App\Models\VprContentMaterial::paginate(2, ['*'], 'page', $pageNumber);
        // dd($all_data_post);
        foreach ($all_data_post->chunk(1) as $districts) {
            foreach ($districts as $data_detail) {
                // dd($data_detail);
                $get_all_image = \App\Models\VprContentMaterialFile::where('material_id',$data_detail->material_id)->get();
                if(count($get_all_image) > 0){
                    // neu trong bai viet co anh thi thuc hien

                    //lay ra list link anh can thay the trong bai viet
                    $all_file_need_change = $get_all_image->pluck('name')->toArray();
                    // dd($all_file_need_change);

                    $text_try_do = $data_detail->text;

                    // for ($i=0; $i < sizeof($all_file_need_change); $i++) { 
                        // $name_per_file = $all_file_need_change[$i];
                        // replace all file in content post

                        //su ly luu file va thay doi du lieu VprContentMaterialFile
                        try {
                            // dd("s");

                            $options = [];
                            $options['ssl'] = array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true);

                            $url_try = "https://voer.edu.vn/m/chugicungduoc/".$data_detail->material_id;
                            // dd($url_try);
                            $html = file_get_contents($url_try,false,stream_context_create($options));

                            $dom = new DOMDocument();
                            @$dom->loadHTML($html);
                            // dd($dom);
                            $get_content_focus = $dom->getElementsByTagName('img');

                            $data_test = [];

                            $list_img = [];
                            $list_mime_type = [];
                            
                        }catch (\Throwable $th) {
                            dd($th);
                            Log::error($th);
                        }
                        // dd("ok");
                    // }
                    // dd($get_content_focus);

                    try {
                        foreach ($get_content_focus as $img_tag) {
                            $src_file_img = $img_tag->getAttribute('src');
                            $data_test[] = $src_file_img;
                            
                            
                            // dd();
    
                            $trim_check_file = explode('/',$src_file_img);
                            // dd($trim_check_file);
                            if(sizeof($trim_check_file) == 3){
                                if(!empty($trim_check_file[2]) and $trim_check_file[0] == "" and is_numeric($trim_check_file[2])){
                                    if($trim_check_file[0] == ""){
                                        $id_file = $trim_check_file[2];
                                        $id_material = $data_detail->material_id;
                                        // dd($id_file,$id_material);
    
                                        $list_img[] = $id_file;
                                        $list_mime_type[] = $img_tag->getAttribute('data-mime-type');
    
    
                                    }
    
                                }
                                
                            }
    
                        }
                        // luu file anh theo id va ten file moi
    
                        $options = [];
                        $options['ssl'] = array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true);
                        for ($i_file=0; $i_file < sizeof($list_img); $i_file++) { 
                            try {
                                $image = file_get_contents("https://old.pif.vn/tuyen-dung/".$list_img[$i_file],false,stream_context_create($options));
                            
                                if ($image != false) {
                                    if(!is_dir('post-file/'.$data_detail->material_id)) {
    
                                        mkdir('post-file/'.$data_detail->material_id, 0755, true);
                                    }
                                    Log::error("save file success : ". 'post-file/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png');
                                    file_put_contents(public_path('post-file/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png'), $image);
    
                                    try {
                                        $im = imagecreatefromstring(file_get_contents(public_path('post-file/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png')));
    
                                        $img_rz = imagecreatetruecolor(100,100);
                                            imagecopyresized($img_rz,$im,0,0,0,0,100,100,100,100);
                                        $new_path_thumb = public_path('post-file/mini') . "/";
                                        
                                        if (!file_exists($new_path_thumb)) {
                                            
                                            mkdir($new_path_thumb, 0755, true);
                                        }
                                        // dd($img_rz);
    
                                        // file_put_contents(public_path('post-file/mini/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png'), $img_rz);
                                        if (!file_exists('post-file/mini/'.$data_detail->material_id)) {
                                            
                                            mkdir('post-file/mini/'.$data_detail->material_id, 0755, true);
                                        }
    
                                        imagepng($img_rz, 'post-file/mini/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png');
    
                                        $mini_file_src = 'post-file/mini/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png';
                                    } catch (\Throwable $th) {
                                        $mini_file_src = 'post-file/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png';
                                    }
                                    
                                
    
                                    // co link file mới rồi giờ update data cũ qua link ảnh mới
                                    $data_file_old_update = VprContentMaterialFile::where('material_id',$data_detail->material_id)->where('id',$list_img[$i_file])->first();
                                    if(!empty($data_file_old_update)){
                                        
                                        // thay doi anh trong bai viet
                                        $data_post_old_update = VprContentMaterial::where('material_id',$data_detail->material_id)->first();
                                        if(!empty($data_post_old_update)){
                                            $old_file_name_need_change = $data_file_old_update->name;
                                            $new_text_change1 = $data_post_old_update->text;
                                            $new_text_change2 = str_replace('/'.$old_file_name_need_change,'post-file/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png',$new_text_change1);
                                            $new_text_change3 = str_replace('data-mime-type="image/jpg"',$list_mime_type[$i_file],$new_text_change2);
                                            $data_post_old_update->text = $new_text_change3;
                                            $data_post_old_update->update();
                                        }
    
                                        $data_file_old_update->name = 'post-file/'.$data_detail->material_id.'/'.$list_img[$i_file].'.png';
                                        $data_file_old_update->mfile = $mini_file_src;
                                        $data_file_old_update->mime_type = $list_mime_type[$i_file];
                                        $data_file_old_update->update();
                                    }else{
                                        Log::error("Khong tim thay data file old co id : ".$list_img[$i_file]. " voi id material : " . $data_detail->material_detail);
                                    }
    
                                    
                                }
                            }catch (\Throwable $th) {
                                dd($th);
                                Log::error("save file fail");
                            }
                        }
                    } catch (\Throwable $th) {
                        dd($th);
                        Log::error("khong co file de luu");
                    }
                    
                }
                // dd($get_all_image);

                
            }
        }
        return $end;
    });
});