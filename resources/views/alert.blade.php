@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Error Alert!</strong> Please check the form below for errors
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Success Alert!</strong> <?php echo $message; ?>
    </div>
    <?php Session::forget('success');?>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Error Alert!</strong> <?php echo $message; ?>
    </div>
    <?php Session::forget('error');?>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Waarning Alert!</strong> <?php echo $message; ?>
    </div>
    <?php Session::forget('warning');?>
@endif
@if ($message = Session::get('info'))
    <div class="alert alert-indo alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Information Alert!</strong> <?php echo $message; ?>
    </div>
    <?php Session::forget('info');?>
@endif