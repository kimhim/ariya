<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Laravel Form BotDetect CAPTCHA Example</title>

  <!-- include the BotDetect layout stylesheet -->
</head>
<body>
  <h2>Laravel Form BotDetect CAPTCHA Example</h2>

  <?php if(session('status')): ?>
    <div class="alert alert-success">
      <?php echo e(session('status')); ?>

    </div>
  <?php endif; ?>

  <form action="<?php echo e(url('/contact')); ?>" method="POST">
    <?php echo csrf_field(); ?>


    <label>Name</label>
    <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="txt-input">
    <?php if($errors->has('name')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('name')); ?></strong>
      </span>
    <?php endif; ?>

    <label>Email</label>
    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="txt-input">
    <?php if($errors->has('email')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('email')); ?></strong>
      </span>
    <?php endif; ?>

    <label>Subject</label>
    <input type="text" name="subject" value="<?php echo e(old('subject')); ?>" class="txt-input">
    <?php if($errors->has('subject')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('subject')); ?></strong>
      </span>
    <?php endif; ?>

    <label>Message</label>
    <textarea name="message" class="txt-area"><?php echo e(old('message')); ?></textarea>
    <?php if($errors->has('message')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('message')); ?></strong>
      </span>
    <?php endif; ?>

    <!-- show captcha image html -->
    <label>Retype the characters from the picture</label>
    <?php echo captcha_image_html('ContactCaptcha'); ?>

    <input type="text" id="CaptchaCode" name="CaptchaCode">

    <?php if($errors->has('CaptchaCode')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('CaptchaCode')); ?></strong>
      </span>
    <?php endif; ?>

    <br>
    <button type="submit" class="btn">Submit</button>

  </form>
</body>
</html>