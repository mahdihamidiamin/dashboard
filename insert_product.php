<?php
include('header.php');

include('db.php')
?>


<form method="post" enctype=multipart/form-data" class="page-content-wrapper ">
    <div class="breadcrumb"></div>
    <div class="container-xl">
        <div class="row">

            <div class="col-12 col-md-12 ">
                <div class="card  card-traditional">
                    <div class="card-header">
                        <div class="card-title">
                            فرم زیر را تکمیل کنید
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>فرم سنتی</h5>
                        <div class="form form-traditional">
                            <div class="form-group ">
                                <label>
                                    نام محصول
                                </label>

                                <input type="text" name="product_title" size="70" required>

                            </div>
                            <div class="row-group two">
                                <div class="form-group ">
                                    <label>
                                        دسته بندی محصول
                                    </label>



                                    <select class="select" style="" name="product_cat">

                                        <?php
                                        $get_cat="select * from categories";
                                        $run_cat=@mysqli_query($con,"SET NAME utf8");
                                        $run_cat=@mysqli_query($con,"SET CHARACTER SET utf8");
                                        $run_cat=mysqli_query($con,$get_cat);
                                        while($row_cat=mysqli_fetch_array($run_cat))
                                        {
                                            $cat_id=$row_cat['cat_id'];
                                            $cat_title=$row_cat['cat_title'];
                                            echo"<option value='$cat_id'>$cat_title</option>";
                                        }
                                        ?>
                                    </select>


                                </div>
                                <div class="form-group ">
                                    <label>
                                        برند محصول
                                    </label>
                                    <select class="select" style="" name="product_brand">

                                        <?php
                                        $get_brand="select * from brands";
                                        $run_brand=@mysqli_query($con,"SET NAME utf8");
                                        $run_brand=@mysqli_query($con,"SET CHARACTER SET utf8");
                                        $run_brand=mysqli_query($con,$get_brand);
                                        while($row_brand=mysqli_fetch_array($run_brand))
                                        {
                                            $brand_id=$row_brand['brand_id'];
                                            $brand_title=$row_brand['brand_title'];
                                            echo"<option value='$brand_id'>$brand_title</option>";
                                        }
                                        ?>

                                    </select>


                                </div>
                                <div class="form-group ">
                                    <label>
                                        قیمت
                                    </label>

                                    <input type="text" name="product_price">

                                </div>

                            </div>
                            <div class="row-group two">

                                <div class="form-group ">
                                    <label>
                                        کلمات کلیدی
                                    </label>
                                    <input type="text" name="product_keywords">

                                </div>
                                <div class="form-group ">
                                    <label>
                                        عکس محصول
                                    </label>
                                    <input type="file" name="product_image">

                                </div>
                            </div>
                            <div class="form-group ">
                                <label>
                                    توضیح محصول
                                </label>
                                <textarea name="product_desc" id="" cols="30" rows="10"></textarea>
                                <input type="" name="product_desc">

                            </div>
                            <div class="form-group ">
                                <td align="center"><input type="submit" name="submit" value="بارگذاری"></td>
                                <td align="center"><input type="reset" name="reset" value="ریست کردن"></td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<script>
    $(".select").select2({
        tags: true,
        dir: "rtl",
        language: "fa"
    });
</script>

<!--//include('footer.php');-->







