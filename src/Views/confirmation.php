<?php
declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */
helper(['admin_jquery']);

register_admin_jquery();
?>
<script type="text/javascript">
    var confirmationModal;

    $(document).ready(function() {        
        confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    });

    var onConfirmation;

    $(document).on('submit', 'form', function(event) {
        var form = $(event.target);
        var confirmation = form.attr('data-confirmation');
        if (confirmation) {
            $('#confirmationModal .modal-body').html(confirmation);
            onConfirmation = function() {
                form.removeAttr('data-confirmation');
                form.trigger('submit');
            };
            confirmationModal.show();
            return false;
        }
    });
</script>
<!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <?php
        /*
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        */?>
        <button type="button" 
            class="btn-close" 
            data-bs-dismiss="modal" 
            aria-label="<?= lang('Admin.Close');?>"></button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button"
            onclick="confirmationModal.hide(); onConfirmation();" 
            class="btn btn-success"><?= lang('Admin.OK');?></button>
        <button type="button" 
            class="btn btn-secondary" 
            data-bs-dismiss="modal"><?= lang('Admin.Cancel');?></button>
      </div>
    </div>
  </div>
</div>