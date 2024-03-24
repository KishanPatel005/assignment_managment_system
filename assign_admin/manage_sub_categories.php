<?php
    include 'top.inc.php';
?>
<form action="" method="POST">
    <div class="content pb-0">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <br>
                        <div class="card-header"><strong>Semester-Managment</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class="form-control-label">Semester</label>
                                <select class="form-control" name="sem">
                                <?php
                                
                                    $sql = mysqli_query($con, "SELECT * FROM sem ORDER BY id ASC ");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>               
                                        <option value="<?php echo $row['sem']; ?>"><?php echo $row['sem']; ?></option>
                                    <?php }?>
                                                </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Subjects</label>
                                <input type="text" name="sem" id="company" placeholder="Enter your Subject name" class="form-control" value="">
                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">submit</span>
                            </button>
                            <span id="payment-button-amount">
                                <!-- <?php echo $msg ?> -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

