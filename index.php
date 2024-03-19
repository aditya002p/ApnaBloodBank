<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/tailwindcss">
    @layer utilities {
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(231,92,99); 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
.hero{
  background-color: #F9F8F8;
}
.hero h1{
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
    }

  /* nav{
    width:100vw ;
    height:10vh;
    background: white;
  } */
  </style>

</head>
<?php include("extras/header.php"); ?>

<body>

  <div class="hero w-100vw h-100vh flex flex-col">
    <img class="heroimg w-[600px] h-auto ml-auto mr-auto md:w-[40vw]" src="image/hero_img.gif" alt="">
    <h1 class=" ml-auto mr-auto text-3xl md:text-4xl -m-1"> Welcome to </h1>
    <h1 class=" ml-auto mr-auto text-4xl 
        text-[#E75B63] md:text-5xl">Digital Blood Bank!</h1>
    <p class="flex justify-center text-2xl leading-20">Save a life</p>
    <div class="home_but flex flex-col md:flex-row justify-center">
      <!-- <button class="Donor border-solid w-fit mt-11 pl-2 pr-2 bg-[#E75B63] hover:border-2 border-red-500 text-white md:mr-10 ml-auto mr-auto">Donate Blood!</button>
        <button class="Need w-fit border-solid mt-11 pl-2 pr-2 border-2 border-red-500 md:ml-10 ml-auto mr-auto">Need Blood?</button> -->
      <a href="donate_blood.php" class="relative inline-block text-lg group mt-11 md:mr-10 ml-auto mr-auto">
        <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
          <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
          <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-[#E75B63] group-hover:-rotate-180 ease"></span>
          <span class="relative">Donate Blood!</span>
        </span>
        <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
      </a>

      <a href="need_blood.php" class="relative inline-block text-lg group mt-11 md:ml-10 ml-auto mr-auto">
        <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
          <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
          <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-[#E75B63] group-hover:-rotate-180 ease"></span>
          <span class="relative">Need Blood?</span>
        </span>
        <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
      </a>
    </div>
    <a href="#sectionss">
      <img class="arr ml-auto mr-auto w-[50px] mb-2 mt-7" src="image/arr-red.gif" alt="">
    </a>
  </div>








  <section id="sectionss" class="text-gray-600 body-font h-auto overflow-hidden ">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 ">
        <div class="p-4 md:w-1/3 ">
          <div class="h-auto border-2 border-gray-200 border-opacity-60 rounded-lg  ">
            <img class="h-60 w-full object-cover object-center" src="image/eligibility.jpeg" alt="blog">
            <div class="p-6 overflow-auto  h-80 w-100 overflow-y-auto">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Eligibility</h1>
              <p class="leading-relaxed mb-3">Learn more about Eligibility Requirements for donating blood.</p>
              <p> If you think you want to donate blood, its important to make sure you meet the requirements and that you properly prepare. Any healthy adult, both male and female, can donate every three months. You'll need to:</p>

              <ul>
                <li>Age between 18 and 60 years</li>
                <li>Haemoglobin - not less than 12.5 g/Dl</li>
                <li>Pulse - between 50 and 100/minute with no irregularities</li>
                <li>Blood Pressure -Systolic 100-180 mm Hg and Diastolic 50 - 100 mm Hg</li>
                <li>Temperature - Normal (oral temperature not exceeding 37.50C)</li>
                <li>Past one year - not been treated for Rabies or received Hepatitis B immune globulin.</li>
                <li>Past six months - not had a tattoo, ear or skin piercing or acupuncture, not received blood or blood products, no serious illness or major surgery, no contact with a person with hepatitis or yellow jaundice.</li>
                <li>Past three months - not donated blood or been treated for Malaria.</li>
                <li>Anyone who has used injected drugs, steroids or another substance not prescribed by a health care provider in the past three months</li>
                <li>Anyone who has had a positive test for HIV</li>
                <li>Anyone who has engaged in sex for money or drugs in the past three months</li>
                <li>Anyone who, in the past 12 months, has had close contact with — lived with or had sexual contact with — a person who has viral hepatitis</li>
                <li>Past one month - not had any immunizations.</li>
                <li>Past 48 hours - not taken any antibiotics or any other medications (Allopathic or Ayurveda or Sidha or Homeo)</li>
                <li>Women should not be pregnant or breast feeding her child</li>
                <li>Women donor should not donate during her menstrual cycles</li>
              </ul>

              <div class="flex items-center flex-wrap ">
                <a class="text-[#E75B63] inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="h-60 w-full object-cover object-center" src="image/benefits.jpeg" alt="blog">
            <div class="p-6 h-80 w-100 overflow-y-auto">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">blood donation benefits</h1>
              <p>Some of the benefits you will be getting for doing this kind act.</p>
              <!-- class="leading-relaxed mb-3" -->
              <!-- <span">Blood Donation Benefits</span> -->
              <!-- id="benefits" class="text-2xl font-bold text-black flex justify-center  -->
              <br>
              <p>Every two seconds someone needs blood. More than 38,000 blood donations are needed every day. A total of 30 million blood components are transfused each year. Donating blood can help:</p>
              <ul>
                <li>People who go through disasters or emergency situations</li>
                <li>People who lose blood during major surgeries</li>
                <li>People who have lost blood because of a gastrointestinal bleed</li>
                <li>Women who have serious complications during pregnancy or childbirth</li>
                <li>People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.
                </li>
              </ul>


              <p>There are also potential benefits for people who regularly donate blood:</p>

              <ul>
                <li><span>Lower iron levels in blood.</span> This is a plus if your iron levels are too high. Donating blood removes some red blood cells, which carry iron throughout your body.</li>
                <li><span>Better cholesterol and triglyceride levels.</span> In one study, researchers checked levels of total cholesterol, triglycerides, HDL (“good”) cholesterol, and LDL (“bad”) cholesterol in 52 people who regularly gave blood and 30 other people. Levels of triglycerides, total, and LDL cholesterol were all lower in those who regularly gave blood. Its not clear why.
                </li>
                <li><span>Emotional benefits </span> from knowing you helped someone else, even if its a stranger. There may also be benefits from taking part in a blood drive with other people from teaming up to do good.
                </li>
              </ul>

              <div class="flex items-center flex-wrap">
                <a class="text-[#E75B63] inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="h-60 w-full object-cover object-center" src="image/procedures.jpeg" alt="blog">
            <div class="p-6 h-80 w-100 overflow-y-auto">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Procedures</h1>
              <p class="leading-relaxed mb-3">Know everything from beginning to end Procedures, Requirements & precautions for donating blood.</p>

              <p> You lie or sit in a reclining chair with your arm extended on an armrest. If you have a preference for which arm or vein is used, tell the person who is collecting your blood. A blood pressure cuff or tourniquet is placed around your upper arm to fill your veins with more blood. This makes the veins easier to see and easier to insert the needle into. It also helps fill the blood bag more quickly. Then the skin on the inside of your elbow is cleaned. <br>

                A new, sterile needle is inserted into a vein in your arm. This needle is attached to a thin, plastic tube and a blood bag. Once the needle is in place, you tighten your fist several times to help the blood flow from the vein. First, blood is collected into tubes for testing. Then blood is allowed to fill the bag, about a pint (about half a liter). The needle is usually in place about 10 minutes. When your donation is finished, the needle is removed, a small bandage is placed on the needle site and a dressing is wrapped around your arm. <br>

                Another method of donating blood becoming increasingly common is apheresis. During apheresis, you are hooked up to a machine that can collect and separate different parts of your blood, such as red cells, plasma and platelets. This process allows more of a single component to be collected. It takes longer than standard blood donation — typically up to two hours. </p>

              <h3>After the Procedure:</h3>

              <p>After donating, you sit in an observation area, where you rest and eat a light snack. After 15 minutes, you can leave. After your blood donation:</p>
              <ul>
                <li>Drink extra fluids.</li>
                <li>Avoid strenuous physical activity or heavy lifting for about five hours.</li>
                <li>If you feel lightheaded, lie down with your feet up until the feeling passes.</li>
                <li>Keep your bandage on and dry for the next five hours.</li>
                <li>If you have bleeding after removing the bandage, put pressure on the site and raise your arm until the bleeding stops.
                </li>
                <li>If bruising occurs, apply a cold pack to the area periodically during the first 24 hours.</li>
                <li>Consider adding iron-rich foods to your diet to replace the iron lost with blood donation.</li>
              </ul>
              <div class="flex items-center flex-wrap ">
                <a class="text-[#E75B63] inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>









      </div>
    </div>
  </section>




  <section>


    <?php include('extras/footer.php'); ?>

</body>

</html>