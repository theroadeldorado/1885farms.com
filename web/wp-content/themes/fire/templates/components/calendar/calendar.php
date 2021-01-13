<?php
  $section->add_classes([
    ''
  ]);
?>

<?php $section->start(); ?>
  <div class="container py-14">
    <div class="grid grid-cols-12 gap-8">
      <div class="col-span-12 md:col-span-3">
        <div class="p-4 bg-gray-100 rounded-md md:pb-8">
          <h4 class="mb-4 text-center md:mb-12 md:text-left">Reserved Dates</h4>
          <div class="smd:flex smd:justify-center smd:items-center smd:space-x-4">
            <div class="flex mb-4 font-body hidden"><span class="inline-block w-6 h-6 mr-2 rounded-sm bg-secondary-500"></span>The House</div>
            <div class="flex mb-4 font-body"><span class="inline-block w-6 h-6 mr-2 rounded-sm bg-accent-500"></span>The Barn</div>
          </div>
        </div>
      </div>
      <div class="col-span-12 md:col-span-9">
        <div id='calendar' class="hidden md:block" data-calendar></div>
        <div id='list' class="block md:hidden" data-calendar></div>
      </div>
    </div>
  </div>
<?php $section->end(); ?>
