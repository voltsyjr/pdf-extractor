

<style>
        #pages input {
            outline: none;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            border: 1px solid #fa65b1;
            transition: all 0.3s;
            width: 150px;
            margin-top: 30px;
            background-color: #eff5fe;
        }
        
        #pages input:focus {
            border: 1px solid transparent;
            box-shadow: 0 0 5px #fa65b1;
            border-radius: 10px;
        }
        
        .files_container {
            background-color: #eff5fe;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            padding: 10px 50px 10px 50px;
        }
        
        .drop_zone {
            width: 300px;
            min-height: 200px;
            border: 2px dashed #0288d147;
            margin: 30px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transition: all 0.25s ease-in-out;
        }
        
        .upload_container {
            border-radius: 25px;
            background-color: #ffffff;
            box-shadow: 0px 10px 20px #0808082e;
            margin-bottom: 40px;
        }
        
        .icon_container {
            width: 75px;
            height: 100px;
            position: relative;
        }
        
        .icon_container img {
            width: 75px;
            position: absolute;
            transform-origin: bottom;
            transition: all 0.25s ease-in-out;
        }
        
        .icon_container img.centre {
            z-index: 3;
        }
        
        .icon_container .right,
        .icon_container .left {
            filter: grayscale(0.5);
            transform: scale(0.9);
        }
        
        .dragged .icon_container .right {
            transform: rotate(10deg) translate(10px) scale(0.9);
            transform-origin: bottom;
        }
        
        .dragged .icon_container .left {
            transform: rotate(-10deg) translate(-10px) scale(0.9);
            transform-origin: bottom;
        }
        
        .dragged .icon_container .centre {
            transform: translateY(-5px);
        }
        
        .dragged.drop_zone {
            background-color: #eff5fe;
        }
        
        .drop_zone #file_input {
            display: none;
        }
        
        .browseBtn {
            color: #2196f3;
            cursor: pointer;
        }
        
        .download_image {
            display: none;
        }
        
        .files_list_span {
            display: inline-block !important;
            padding: 3px 10px !important;
            color: #fa65b1 !important;
            border: 1px solid #fa65b1 !important;
            border-radius: 23px;
            font-weight: 500 !important;
            letter-spacing: 0.3px !important;
            transition: all .5s;
            margin: 5px 5px;
        }
        
        .files_list_span:hover {
            background-color: #fa65b1;
            color: #fff !important;
            cursor: pointer;
        }
        
        input.files_list_span {
            background-color: aliceblue;
        }
        .btns_to_show{
            display: none;
        }
    </style>
    <!-- Working place most of the time -->
    <div id="work" class="work-section section" style="padding-top: 0;margin-bottom: 50px;padding-top: 100px;margin-top: -100px;">
        <div class="container">
            <div class="row">



            <!-- setting session -->
                <div id="ipget" style="position: absolute;z-index:-334;width:10px">
                <?php
                    if(isset($_SESSION['ip'])){
                        echo "0";
                    }else{
                        echo "1";
                    }

?>
</div>
<script>
    var zt_val = $('#ipget');
    if(zt_val.text()==1){
        $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {
            // console.log(JSON.stringify(data, null, 2));
            // console.log("this is from")
            ip_s=data.ipAddress;
            var url = "createsession.php?zt="+ip_s;
            window.location.href = url;
        });

}else if(zt_val.text()==0){
    // console.log(" set");
}

</script>
                <h2 style="text-align: center;margin-bottom: 60px;"> <span class="pink"> Extract Image From PDF
                <?php
                    // if(isset($_SESSION['ip'])){
                    //     echo "session started".$_SESSION['ip'];
                    // }else{
                    //     echo "session not started";
                    // }

?>
                </span>
                </h2>
            </div>
            <div class="row">









                <div class="col-lg-12" style="position: relative;">








                <div class="col-lg-12" style="width:calc(100% - 24px );height:100%;position:absolute;right:12px;top:0;z-index:-5;opacity:1; " id="ajax_load">
            <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader" style="width: 100%;height:100%;position:relative;opacity:1;background-color:rgb(255, 255, 255, 0.4)">
        <div class="preloader-inner" style="background-color: unset;">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
            </div>



















                    <div>
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li style="    box-shadow: 0px 0px 15px rgb(0, 0, 0, 0.15);padding: 50px;border-radius: 5px;z-index: 33;position: relative;">
                                            <div>
                                                <div>
                                                    <div class="row" style="display: flex;flex-wrap: wrap;justify-content: center;">
                                                        <div class="col-lg-6">
                                                            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST"  enctype="multipart/form-data" id="form_data" name="form_data" autocomplete="off">

                                                            <div class="left-text files_container" >
                                                                <h4 style="text-align: center;margin-bottom: 10px;">
                                                                    Choose Your PDF File</h4>
                                                                <section class="upload_container">
                                                                    <div class="drop_zone">
                                                                        <div class="icon_container">
                                                                            <img src="media/images/file.svg" alt="" draggable="false" class="centre">
                                                                            <img src="media/images/file.svg" alt="" draggable="false" class="left">
                                                                            <img src="media/images/file.svg" alt="" draggable="false" class="right">
                                                                        </div>
                                                                        <input type="file" id="file_input" name="file_input[]" multiple accept=".pdf">
                                                                        <div class="title">
                                                                            Drop your Files here or, <span class="browseBtn">Browse</span>
                                                                        </div>
                                                                    </div>
                                                                </section>





                                                                <div style="flex-wrap: wrap;justify-content: space-around;width: 100%;" id="pages" class="btns_to_show">
                                                                    <input type="number" name="start_page" id="start_page" placeholder="Start Page No." min="1">
                                                                    <input type="number" name="end_page" id="end_page" placeholder="End Page No." min="1">
                                                                    <input type="text" name="ip" id="ip" hidden>

                                                                </div>
                                                                <div class="row btns_to_show">
                                                                    <input type="submit" value="Extract images" class="files_list_span" style="margin-top: 10px;" id="extract_image" name="submit">
                                                                    <!-- <span class="files_list_span" style="margin-top: 10px;" id="extract_image" name="submit">Extract images</span> -->
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="row download_image ">
                                                                <div class="border-first-button scroll-to-section" style="text-align: center;margin-top: 30px;" id="just_download">
                                                                    <!-- <a href="#" >Download Your Images</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6" style="display: flex;flex-direction: column;justify-content: center;align-items: center;width: 380px;margin-left: 50px;" id="pdf_to_show">
                                                            <h4 style="text-align: center;margin-top: -10px;margin-bottom: 10px;">
                                                                Your PDF File</h4>
                                                            <iframe src="" type="application/pdf" frameBorder="0" scrolling="auto" height="100%" width="100%" id="viewer"></iframe>
                                                            <div class="row">
                                                                <div class="col" style="display: flex;flex-wrap: wrap;justify-content: center;align-items: center;margin-top: 30px;" id="file_selector">
                                                                    <!-- <span class="files_list_span" id="1">file1.pdf</span>
                                                                    <span class="files_list_span" id="2">file2.pdf</span>
                                                                    <span class="files_list_span" id="3">file3.pdf</span>
                                                                    <span class="files_list_span" id="4">file4.pdf</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <style>
        /* .galary{ */
            /* display: none; */
        /* } */
        .galary img {
            width: 100%;
            /* height: 80%; */
            /* padding-bottom: 15px; */
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px #726ae3;
        }
        
        .galary h4 {
            width: 300px;
        }
    </style>
    <div class="container galary">
    <?php
                    if(isset($_SESSION['ip'])){
                        $sql="SELECT Fname,images,zip,time from folders where ip='{$_SESSION['ip']}' and time=(Select max(time) from folders where ip='{$_SESSION['ip']}');" or die();
                        $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){

                        ?>

 <div class="heading">
            <div style="width: 300px;position: relative;margin: auto;">
                <h4 style="text-align: center;margin-bottom: 60px;margin-top: 80px;"> <span style="border-bottom: 3px solid #fa65b1;padding-bottom: 3px;"> Your </span></Your> <span class="pink" style="border-bottom: 3px solid #726ae3;padding-bottom: 3px;">Iamge Gallery</span></h4>
            </div>
        </div>

        <div class="row" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
        <?php 
           
                $row=mysqli_fetch_assoc($result);
                // echo "yes";
                $img_data="";
                $str = $row['images'];
                $myArr = explode('`',$str);
                $folder=$row['Fname'];
                $j=0;
                $total_images=sizeof($myArr);
                
                for($i=1;$i<$total_images+1;$i=$i+6){
                    $img_data.="<div class='col-md-2 col-12'>";
                    for($k=0;$k<6 && $j<$total_images;$k++){
                        $img_data.="<img src='".$folder."//".$myArr[$j]."' alt=''>";
                        $j=$j+1;
                    }
                    $img_data.="</div>";
                }

                echo $img_data;
                ?>
                </div>
        <div class="row">
            <div class="border-first-button scroll-to-section download_image" style="text-align: center;margin-top: 30px;display:flex;justify-content:center">
            <?php
                echo "<a href='".$folder."//".$row['zip']."' target='_blank'>Download Your Images</a>";
                ?>
            </div>
        </div>
                <?php
}else{
                // echo "<h4>query failed</h4>";
            }
        ?>
        

<?php
                    }else{
                        // echo "session not started";
                    }

?>
    </div>
    
 
    <script>
        var ip_s="";
        // var ip_s="106.195.109.136";
        var ip_to=""
      
        $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {
            // console.log(JSON.stringify(data, null, 2));
            // console.log("this is from")
            ip_s=data.ipAddress;
        });


            $("form#form_data").submit(function(e) {
                e.preventDefault();    
                ip_to=document.getElementById("ip");
                ip_to.value=ip_s;
                var extract = document.getElementById("extract_image");
                var total = file_input.files.length;
                var start = $('#start_page');
                var end = $('#end_page');
                if(start.val()==""){
                    start.val(1);
                }
                if(end.val()==""){
                    end.val(-1);
                }
                var formData = new FormData(this);
                $(document).ajaxStart(function() {          //set loader to ajax
                    $("#ajax_load").css("z-index","50");
                }).ajaxStop(function() {
                    $("#ajax_load").css("z-index","-5");
                });
                $.ajax({
                    url: "https://localhost/python/pdf/extract_image.php",
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        // alert(data);
                        $('.galary').css("display","block");
                        $('.download_image').css("display","flex");
                        var img_data="";
                        let str = data[1];
                        var myArr = str.split("`");
                        var j=0;
                        var total_images=data[0];
                        
                        for(i=1;i<total_images+1;i=i+6){
                            // console.log("yes");
                            img_data+="<div class='col-md-2 col-12'>";
                            for(k=0;k<6 && j<total_images;k++){
                                img_data+="<img src='"+data[3]+"/"+myArr[j]+"' alt=''>";
                                j=j+1;
                            }
                            img_data+="</div>";
                        }
                        // console.log(img_data,total_images,j);
                        var gallary = '<div class="heading"><div style="width: 300px;position: relative;margin: auto;"><h4 style="text-align: center;margin-bottom: 60px;margin-top: 80px;"> <span style="border-bottom: 3px solid #fa65b1;padding-bottom: 3px;"> Your </span></Your> <span class="pink" style="border-bottom: 3px solid #726ae3;padding-bottom: 3px;">Iamge Gallery</span></h4></div></div><div class="row" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">'+img_data+'</div><div class="row"><div class="border-first-button scroll-to-section download_image" style="text-align: center;margin-top: 30px;display:flex;justify-content:center"><a href="'+data[3]+"/"+data[2]+'" target="_blank">Download Your Images</a></div></div>'
                        $('.galary').html(gallary);
                        var just_download="<a href='"+data[3]+"/"+data[2]+"' target='_blank' >Download Your Images</a>"
                        $('#just_download').html(just_download);
                        start.val("");
                        end.val("");
                        // console.log(data);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
    </script>