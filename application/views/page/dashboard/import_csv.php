<main class="c-main">
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <?php echo $page_title ?>
                                    <a class="btn btn-warning text-white float-right text-white" href="<?php echo $page_url; ?>"><i class="fa fa-arrow-circle-left"></i> Back</a>

                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->flashdata('alert') !== null) echo $this->session->flashdata('alert') ?>
                                    <div class="row">                                       
                                        <div class="col-8">
                                            <?php
                                            if (isset($validation_error) && $validation_error !== null) echo $validation_error; ?>
                                            <form class="" action="<?php echo $form_action ?>" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-12 px-5">
                                                        <div class="form-group row">
                                                            <?php echo $this->form_template->file('File', 'userfile') ?>
                                                        </div>
                                                        <div class="form-group float-right  row">
                                                            <button class='btn btn btn-warning text-white ' type='submit'> Upload CSV</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>