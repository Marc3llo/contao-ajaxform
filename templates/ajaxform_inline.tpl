<div class="formbody">
<?php if ($this->method != 'get'): ?>
<input type="hidden" name="FORM_SUBMIT" value="<?php echo $this->formSubmit; ?>" />
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->maxFileSize; ?>" />
<?php endif; ?>
<?php echo $this->hidden; ?>
<?php if (!$this->tableless): ?>
<table cellspacing="0" cellpadding="0" summary="Form fields">
<?php echo $this->fields; ?>
</table>
<?php else: echo $this->fields; endif; ?>
</div>