<?php 
require("connection.php");
session_start();
$cid=$_SESSION['cid'];

$result=mysqli_query($con,"select sid,status from shop where sid='$cid'");

if(mysqli_num_rows($result)==0)
{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/req.css">
 
    <title>Document</title>
</head>



    <div class="container">
      <div class="text">shop request</div>

       <form action="reqs.php" method="post"  enctype="multipart/form-data" >
           <div class="form-row">
               <div class="input-data">
                   <input type="text" name="fname" required>
                   <div class="underline"></div>
                   <label for="">first name</label>
               </div>
               <div class="input-data">
                <input type="text" name="lname" required>
                <div class="underline"></div>
                <label for="">last name</label>
            </div>
           </div>


           <div class="form-row">
            <div class="input-data">
                <input type="text" name="sname" required>
                <div class="underline"></div>
                <label for="">Shop name</label>
            </div>
            <div class="input-data">
             <input type="text" name="stype" required>
             <div class="underline"></div>
             <label for="">Shop Type</label>
         </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="pin" required>
                <div class="underline"></div>
                <label for="">Pincode</label>
            </div>
            <div class="input-data">
             <input type="text" name="cnum" required>
             <div class="underline"></div>
             <label for="">Contact number</label>
         </div>
        </div>
           
        <div class="form-row">
            <!-- <div class="input-data"> -->
          
                <div class="container1">
                    <div class="wrapper">
                        <div class="image">
                            <img src=" " alt="">
                        </div>
                        <div class="content">
                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="text1">no file is selected</div>                                                                                                                         
                        </div>
                        <div id="cancel-btn"><i class="fas  fa-times"></i></div>
                        <div class="file-name">file name here</div>
                    </div>
                    <input type="file" accept="image/*" id="default-btn" name="lbill" hidden required>
                    <button onclick="defaultBtnActive()" id="custom-btn">choose file</button>
                </div>
                
            <!-- </div> -->
            <!-- <div class="input-data"> -->
                <div class="container2">
                    <div class="wrapper2">
                        <div class="image2">
                            <img src=" " alt="">
                        </div>
                        <div class="content2">
                            <div class="icon2"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="text2">no file is selected</div>                                                                                                                         
                        </div>
                        <div id="cancel-btn2"><i class="fas  fa-times"></i></div>
                        <div class="file-name2">file name here</div>
                    </div>
                    <input type="file" accept="image/*" id="default-btn2" name="gst" hidden required>
                    <button onclick="defaultBtnActive2()" id="custom-btn2">choose file</button>
                </div>

         </div>
        <!-- </div> -->



        <div class="form-row ">
            <div class=" textarea input-data">
                <div class="underline"></div>
           <textarea cols="30" rows="10" name="address" required></textarea>
                <label for="">Address</label>
         
        </div>

    </div>
        <div class="form-row submit-btn">
            <div class="input-data">
               <div class="inner"></div>
               <input type="submit" value="send" name="submit">
            </div>
        </div>


       </form>
    </div>

    <script>
        const wrapper =    document.querySelector(".wrapper");
         const fileName =    document.querySelector(".file-name");
         const cancelBtn =    document.querySelector("#cancel-btn");
     const defaultBtn =    document.querySelector("#default-btn");
     const customBtn =  document.querySelector("#custom-btn");

     const img= document.querySelector("img");
     let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/ ;
     function defaultBtnActive(){
        defaultBtn.click();
     }
   



     defaultBtn.addEventListener("change", function(){
           const file =this.files[0];
           if(file){
               const reader = new FileReader();
               reader.onload=function(){
               const result =reader.result;
               img.src=result;
               wrapper.classList.add("active");

           }

           cancelBtn.addEventListener("click",function(){
            img.src=" ";
            wrapper.classList.remove("active");
           });

           reader.readAsDataURL(file);
           }
           if(this.value){
               let valueStore= this.value.match(regExp);
               fileName.textContent = valueStore;
           }

     });




     const wrapper2 =    document.querySelector(".wrapper2");
         const fileName2 =    document.querySelector(".file-name2");
         const cancelBtn2 =    document.querySelector("#cancel-btn2");
     const defaultBtn2 =    document.querySelector("#default-btn2");
     const customBtn2 =  document.querySelector("#custom-btn2");

     const img2= document.querySelector("body > div > form > div:nth-child(4) > div.container2 > div > div.image2 > img");
     let regExp2 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/ ;
     function defaultBtnActive2(){
        defaultBtn2.click();
     }
     



     defaultBtn2.addEventListener("change", function(){
           const file =this.files[0];
           if(file){
               const reader = new FileReader();
               reader.onload=function(){
               const result =reader.result;
               img2.src=result;
               wrapper2.classList.add("active2");

           }

           cancelBtn2.addEventListener("click",function(){
            img2.src=" ";
            wrapper2.classList.remove("active2");
           });

           reader.readAsDataURL(file);
           }
           if(this.value){
               let valueStore= this.value.match(regExp2);
               fileName2.textContent = valueStore;
           }

     });
     
    </script>

</body>
</html>

<?php
}else{
    $row=mysqli_fetch_assoc($result);
    $sid=$row['sid'];
    $status=$row['status'];
    if($status==0){
        header("location:status.php");
           
    }else if($status==1){
        header("location:shopNewAdmin");
        
    }
}
?>
