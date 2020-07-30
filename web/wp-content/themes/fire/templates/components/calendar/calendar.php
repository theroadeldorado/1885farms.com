<?php
  $section->add_classes([
    ''
  ]);
?>

<?php $section->start(); ?>
  <div class="container py-14">
    <div class="grid grid-cols-12 gap-8">
      <div class="col-span-3">
        <div class="p-4 pb-8 bg-gray-100 rounded-md">
          <h4 class="mb-12">Reserved Dates</h4>
          <div class="flex mb-4 font-body"><span class="inline-block w-6 h-6 mr-2 rounded-sm bg-secondary-500"></span>The House</div>
          <div class="flex mb-4 font-body"><span class="inline-block w-6 h-6 mr-2 rounded-sm bg-accent-500"></span>The Barn</div>
        </div>
      </div>
      <div class="col-span-9">
        <div id='calendar'></div>
      </div>
    </div>
  </div>
<?php $section->end(); ?>
