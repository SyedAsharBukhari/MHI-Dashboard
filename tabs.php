<?php 
include('./layouts/head.php');
include('./layouts/sidebar.php');
?>





<!-- 3 tabs start -->
<div class="flex justify-center gap-4">

    <button id="publicButton" class="font-semibold h-20 w-60 bg-blue-100 rounded-lg shadow-xl focus:bg-blue-800 focus:text-white" onclick="getPublicvalue()">Public Data</button>
    
    <button id="internalButton1" class="font-semibold h-20 w-60 bg-blue-100 rounded-lg shadow-xl focus:bg-blue-800 focus:text-white" onclick="getOnevalue()">Internal Data 1</button>
    
    <button id="internalButton2" class="font-semibold h-20 w-60 bg-blue-100 rounded-lg shadow-xl focus:bg-blue-800 focus:text-white" onclick="getTwovalue()">Internal Data 2</button>
    
    <button id="internalButton3" class="font-semibold h-20 w-60 bg-blue-100 rounded-lg shadow-xl focus:bg-blue-800 focus:text-white" onclick="getThreevalue()">Internal Data 3</button>
    
    </div>

<!-- 3 tabs end -->




<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-6" id="public">
    <h1 class="text-2xl font-bold mb-6">Research Article Form</h1>
    
    <form>
        <!-- Title -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Title:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Authors -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Authors:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Year -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Year:</label>
            <input type="number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Country -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Country:</label>
            <!-- <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"> -->
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
<option value="" disabled selected>Please Select Your Country</option>
<option value="japan">Japan</option>
<option value="china">China</option>
<option value="korea">Korea</option>
<option value="usa">USA</option>
<option value="russia">Russia</option>
<option value="serbia">Serbia</option>
<option value="czech-republic">Czech Republic</option>
<option value="slovakia">Slovakia</option>
<option value="germany">Germany</option>
<option value="france">France</option>
<option value="hungary">Hungary</option>
<option value="india">India</option>
<option value="israel">Israel</option>
<option value="poland">Poland</option>
<option value="spain">Spain</option>
<option value="uk">UK</option>
<option value="other">Other</option>
</select>
        </div>

        <!-- Grant Country -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Grant Country:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- PMID -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">PMID:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- DOI -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">DOI:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Abstract -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Abstract:</label>
            <textarea class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5"></textarea>
        </div>

        <!-- Journal -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Journal:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Journal URL -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Journal URL:</label>
            <input type="url" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com" required>

        </div>

        <!-- Volume -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Volume:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Pages -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Pages:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Impact Factor -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Impact Factor:</label>
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="study-type-select" required>
<option value="" disabled selected>Please Select Impact Factor</option>
<option value="0<=1">0<=1</option>
<option value="1<=2">1<=2</option>
<option value="2<=4">2<=4</option>
<option value="4<=6">4<=6</option>
<option value="6<=8">6<=8</option>
<option value="8<=10">8<=10</option>
<option value="10<">10<</option>
</select>
        </div>

        <!-- SciMAGO -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">SciMAGO:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Outcome -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Outcome:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Study Type -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Study Type:</label>
            
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
<option value="" disabled selected>Please Select Study Type</option>
<option value="clinical-studies">Clinical Studies</option>
<option value="human-studies">Human Studies</option>
<option value="animal-study">Animal Study</option>
<option value="review">Review</option>
<option value="hypothesis">Hypothesis</option>
<option value="in-vitro">In vitro</option>
<option value="in-silico">In silico</option>
<option value="cell-culture">Cell Culture</option>
<option value="other">Other</option>
</select>

        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Submit</button>
        </div>

    </form>
</div>

<!-- first button active show this form -->
<div id="showOne"><h1>First Dislay</h1></div>
<div id="showTwo"><h1>Second Dislay</h1></div>
<div id="showThree"><h1>Third Dislay</h1></div>





<script>
function getPublicvalue(){
let public = document.getElementById('public').style.display="block"
let showOne = document.getElementById('showOne').style.display="none"
let showTwo = document.getElementById('showTwo').style.display="none"
let showThree = document.getElementById('showThree').style.display="none"

setActiveButton('publicButton');
}
function getOnevalue(){
let public = document.getElementById('public').style.display="none"
let showOne = document.getElementById('showOne').style.display="block"
let showTwo = document.getElementById('showTwo').style.display="none"
let showThree = document.getElementById('showThree').style.display="none"

setActiveButton('internalButton1');
}
function getTwovalue(){
let public = document.getElementById('public').style.display="none"
let showOne = document.getElementById('showOne').style.display="none"
let showTwo = document.getElementById('showTwo').style.display="block"
let showThree = document.getElementById('showThree').style.display="none"

setActiveButton('internalButton2');
}
function getThreevalue(){
let public = document.getElementById('public').style.display="none"
let showOne = document.getElementById('showOne').style.display="none"
let showTwo = document.getElementById('showTwo').style.display="none"
let showThree = document.getElementById('showThree').style.display="block"

setActiveButton('internalButton3');
}




function setActiveButton(activeButtonId) {
// Reset all buttons to their original state
const buttons = ['publicButton', 'internalButton1', 'internalButton2', 'internalButton3'];
buttons.forEach(buttonId => {
    document.getElementById(buttonId).classList.remove('bg-blue-800', 'text-white');
    document.getElementById(buttonId).classList.add('bg-blue-100');
});

// Set the clicked button as active
document.getElementById(activeButtonId).classList.remove('bg-blue-100');
document.getElementById(activeButtonId).classList.add('bg-blue-800', 'text-white');
}


window.onload = function(){
    getPublicvalue();
};



</script>

<?php 
include('./layouts/footer.php');

?>