<?php
function inputElement($icon, $placeholder, $name, $value = "")
{
  $ele = ' <div class="input-group mb-2">
  <div class="input-group-prepend">
    <div class="input-group-text bg-warning"><i class="' . $icon . ' "></i></div>
  </div>
  <input type="text" name="' . $name . '", value="' . $value . '"
    class="form-control" autocomplete="off" placeholder="' . $placeholder . '">
</div>
            ';

  echo $ele;
};
function buttonElment($btnID, $name, $styleClass, $text, $attr = '')
{
  $btn = '
  <button name="' . $name . '" ' . $attr . '  class="' . $styleClass . '" id="' . $btnID . '">' . $text . '</button>
  ';
  echo $btn;
}
