<form action="POST" class="form" name="form" id="name">
  <div class="col-xs-12 col-sm-12 col-md-5">
    <div class="form-group">
      <label for="businesslocation2">Select the quantity of locations <span class="red">*</span></label>
    </div>
    <div class="form-group">
      <select class="form-control" onchange="jo()" class="ho" name="ho" id="ho">
        <option value="">---</option>
        <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
          <?php foreach ($query4 as $value): ?>
            <option value="1" <?= $value['businesslocation2'] == '1'? 'selected="selected"' : '' ?> >One</option>
            <option value="2" <?= $value['businesslocation2'] == '2'? 'selected="selected"' : '' ?> >Two</option>
            <option value="3" <?= $value['businesslocation2'] == '3'? 'selected="selected"' : '' ?> >Three</option>
            <option value="4" <?= $value['businesslocation2'] == '4'? 'selected="selected"' : '' ?> >Four</option>
            <option value="5" <?= $value['businesslocation2'] == '5'? 'selected="selected"' : '' ?> >Five</option>
            <option value="mas-5" <?= $value['businesslocation2'] == 'mas-5'? 'selected="selected"' : '' ?> >More than Five</option>
          <?php endforeach; ?>
        <?php else: ?>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          <option value="4">Four</option>
          <option value="5">Five</option>
          <option value="mas-5">More than Five</option>
        <?php endif; ?>
      </select>
    </div>
  </div>

  <div id="f1">
      <h1>Yo soy 1</h1>
      <input type="text" value="ramon">
  </div>

  <div id="f2">
      <h1>Yo soy 2</h1>
      <input type="text" value="ramon">
  </div>

  <div id="f3">
      <h1>Yo soy 3</h1>
      <input type="text" value="ramon">
  </div>

  <div id="f4">
      <h1>Yo soy 4</h1>
      <input type="text" value="ramon">
  </div>

  <div id="f5">
      <h1>Yo soy 5</h1>
      <input type="text" value="ramon">
  </div>

  <div id="f6">
      <h1>Yo soy 6</h1>
      <input type="text" value="ramon">
  </div>
</form>
