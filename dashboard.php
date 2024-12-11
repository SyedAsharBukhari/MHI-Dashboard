<?php 
include('./layouts/head.php');
include('./layouts/sidebar.php');
?>




 <!-- top -->
 <div class="flex justify-between items-center mb-10">
            <h1 class="text-3xl font-bold">Dashboard Overview</h1>
            <a href="/test-web/tabs.php" class="bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700">Add New</a>
        </div>
<!-- top -->




<!-- 3 container -->
<div class="flex gap-6">

<div class="bg-white w-[450px] p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold mb-4">Card 1</h2>
    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>

<div class="bg-white w-[450px] p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold mb-4">Card 2</h2>
    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>

<div class="bg-white w-[450px] p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold mb-4">Card 3</h2>
    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>

</div>
<!-- 3 container end -->


<?php 
include('./layouts/footer.php');

?>