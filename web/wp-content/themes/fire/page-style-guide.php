<?php
  /* Template Name: Style Guide */
  /**
   * The template for displaying the Style Guide
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Fire
   */

  get_header();
?>

<div class="container mx-auto mt-40 mb-20">
  <div>
    <div class="flex">
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-primary-300">primary-300</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-primary-500">primary-500</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-primary-700">primary-700</div>
    </div>
    <div class="flex">
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-secondary-300">secondary-300</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-secondary-500">secondary-500</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-secondary-700">secondary-700</div>
    </div>
    <div class="flex">
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-accent-300">accent-300</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-accent-500">accent-500</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-accent-700">accent-700</div>
    </div>

    <div class="flex">
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-black bg-gray-100">gray-100</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-black bg-gray-200">gray-200</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-black bg-gray-300">gray-300</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-gray-500">gray-500</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-gray-600">gray-600</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-gray-700">gray-700</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-gray-800">gray-800</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-gray-900">gray-900</div>
    </div>
    <div class="flex">
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-black-500">black-500</div>
      <div class="flex items-center justify-center w-32 h-20 mb-4 mr-4 text-center text-white bg-black-900">black-900</div>
    </div>
  </div>

  <hr>

  <p><strong>Base heading styles</strong></p>

  <h1>Heading - One</h1>
  <h2>Heading - Two</h2>
  <h3>Heading - Three</h3>
  <h4>Heading - Four</h4>
  <h5>Heading - Five</h5>
  <h6>Heading - Six</h6>

  <br>

  <p><strong>Base paragraph styles</strong></p>

  <p class="lead">Lead — Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, voluptatibus perferendis recusandae error unde repudiandae. Iste ab eius quibusdam inventore?</p>

  <p>Paragraph — Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, voluptatibus perferendis recusandae error unde repudiandae. Iste ab eius quibusdam inventore?</p>

  <hr>

  <div class="flex flex-wrap items-center p-10">
    <button type="button" class="mr-4 button button-white">watch more</button>
    <button type="button" class="mr-4 button button-primary">watch more</button>
    <button type="button" class="mr-4 button button-primary button-lg">watch more</button>
  </div>

  <div class="flex flex-wrap items-center p-10 bg-black">
    <button type="button" class="mr-4 button button-white">watch more</button>
    <button type="button" class="mr-4 button button-primary">watch more</button>
    <button type="button" class="mr-4 button button-primary button-lg">watch more</button>
  </div>

  <hr>

  <div class="w-1/2">
    <div class="flex">
      <div class="flex-grow mr-3 form-group">
        <label class="form-input-label">First Name</label>
        <input type="text" class="form-input">
      </div>
      <div class="flex-grow form-group">
        <label class="form-input-label">Last Name</label>
        <input type="text" class="form-input">
      </div>
    </div>
    <div class="form-group">
      <label class="form-input-label">Email Address</label>
      <input type="text" class="form-input">
    </div>
    <div class="form-group">
      <label class="form-input-label">Comment</label>
      <textarea type="text" class="form-input"></textarea>
    </div>
  </div>

  <hr>

  <div class="flex space-x-4">
    <div class="w-32 h-32 circle circle-dots"></div>
    <div class="w-32 h-32 circle circle-dots-xl"></div>
    <div class="w-32 h-32 circle circle-lines-right"></div>
    <div class="w-32 h-32 circle circle-lines-left"></div>
  </div>

</div>


<?php
  get_footer();
?>