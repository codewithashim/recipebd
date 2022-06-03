<?php
if (isset($_POST['add_cat'])) {
    $return_msg = $obj->add_category($_POST);
}

?>

<?php if (isset($return_msg)) {
    echo $return_msg;
} ?>

<?php if (isset($return_msg)) {
    echo $return_msg;
} ?>


<div class="row d-flex justify-content-center">
    <div class="col-md-8 mt-5">
        <form action="" method="POST">
            <div class="form-group">
                <label class="mb-1" for="cat_name">Category Name</label>
                <input name="cat_name" class="form-control py-4" id="cat_name" type="text" required/>
            </div>
            <div class="form-group">
                <label class="mb-1" for="cat_des">Category Description</label>
                <input name="cat_des" class="form-control py-4" id="cat_des" type="text" required/>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" name="add_cat" value="Add Category" class="form-control btn btn-secondary">
            </div>
        </form>
    </div>
</div>
</div>