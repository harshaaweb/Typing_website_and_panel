// define the time limit

var TIME_LIMIT = 10;
DB_Time = TIME_LIMIT / 60;

var timer_id = document.getElementsByClassName("timer_id");
timer_id[0].onclick = function () {
  TIME_LIMIT = 300;
  resetValues();
};
timer_id[1].onclick = function () {
  TIME_LIMIT = 600;
  resetValues();
};
timer_id[2].onclick = function () {
  TIME_LIMIT = 900;
  resetValues();
};
timer_id[3].onclick = function () {
  TIME_LIMIT = 1200;
  resetValues();
};
// define quotes to be used
let quotes_array = [
  "Mental health is crucial and integrates a component of health. Mental health includes an individual’s psychological, emotional and social well-being. Proper mental health results in the proper mental functioning that result in being productive in activities, healthy and fulfilling relationships with other people andhaving the ability to cope and adapt to adversity.Proper mental health is essential in every stage of life – from childhood andteenage to adulthood. Throughout a lifetime, an individual can experience mental health issue at any point. This affects not only their mood and behavior but also changes their way of thinking, of looking at life and facing challenges.Born into a Jewish family on 14th March 1879 in Germany, Einstein had early speech difficulties, still he was a topper at the elementary school. His father, Hermann Einstein was a salesman and engineer, who with his brother, founded an electrical equipment manufacturing company. Albert had a sister, Maja, two years younger to him. When Albert was five, his father showed him a pocket compass. Albert realized that something in empty space was moving the needle and later stated that this experience made ‘a deep and lasting impression’ on him. In 1889, a family friend named Max Talmud introduced the ten year old Albert to popular science and philosophy texts. These included Kant’s ‘Critique of Pure Reason’ and ‘Euclid’s Elements’. From the latter book, Albert began to understand deductive reasoning, and by the age of 12, he learned Euclidian geometry from a school booklet. In his early teens, Albert attended the new and progressive Luitpold Gymnasium. His father intended him to pursue electrical engineering, but Albert clashed with the authorities and resented rote learning. According to him, the spirit of learning and creative thought were lost in rote learning.",
];

// selecting required elements
let timer_text = document.querySelector(".curr_time");
let accuracy_text = document.querySelector(".curr_accuracy");
let error_text = document.querySelector(".curr_errors");
let cpm_text = document.querySelector(".curr_cpm");
let wpm_text = document.querySelector(".curr_wpm");
let quote_text = document.querySelector(".quote");
let input_area = document.querySelector(".input_area");
let restart_btn = document.querySelector(".restart_btn");
let cpm_group = document.querySelector(".cpm");
let wpm_group = document.querySelector(".wpm");
let error_group = document.querySelector(".errors");
let accuracy_group = document.querySelector(".accuracy");

let timeLeft = TIME_LIMIT;
let timeElapsed = 0;
let total_errors = 0;
let errors = 0;
let accuracy = 0;
let characterTyped = 0;
let current_quote = "";
let quoteNo = 0;
let timer = null;

function updateQuote() {
  quote_text.textContent = null;
  current_quote = quotes_array[quoteNo];

  // separate each character and make an element
  // out of each of them to individually style them
  current_quote.split("").forEach((char) => {
    const charSpan = document.createElement("span");
    charSpan.innerText = char;
    quote_text.appendChild(charSpan);
  });

  // roll over to the first quote
  if (quoteNo < quotes_array.length - 1) quoteNo++;
  else quoteNo = 0;
}

function processCurrentText() {
  // get current input text and split it
  curr_input = input_area.value;
  curr_input_array = curr_input.split("");

  // increment total characters typed
  characterTyped++;

  errors = 0;

  quoteSpanArray = quote_text.querySelectorAll("span");
  quoteSpanArray.forEach((char, index) => {
    let typedChar = curr_input_array[index];

    // characters not currently typed
    if (typedChar == null) {
      char.classList.remove("correct_char");
      char.classList.remove("incorrect_char");

      // correct characters
    } else if (typedChar === char.innerText) {
      char.classList.add("correct_char");
      char.classList.remove("incorrect_char");

      // incorrect characters
    } else {
      char.classList.add("incorrect_char");
      char.classList.remove("correct_char");

      // increment number of errors
      errors++;
    }
  });

  // display the number of errors
  error_text.textContent = total_errors + errors;

  // update accuracy text
  let correctCharacters = characterTyped - (total_errors + errors);
  let accuracyVal = (correctCharacters / characterTyped) * 100;
  accuracy_text.textContent = Math.round(accuracyVal);

  // if current text is completely typed
  // irrespective of errors
  if (curr_input.length == current_quote.length) {
    updateQuote();

    // update total errors
    total_errors += errors;

    // clear the input area
    input_area.value = "";
  }
}

function updateTimer() {
  if (timeLeft > 0) {
    // decrease the current time left
    timeLeft--;

    // increase the time elapsed
    timeElapsed++;

    // update the timer text
    timer_text.textContent = timeLeft + "s";
  } else {
    // finish the game
    finishGame();
  }
}

function finishGame() {
  // stop the timer
  clearInterval(timer);

  // disable the input area
  input_area.disabled = true;

  // show finishing text
  quote_text.textContent = "Click on restart to start a new game.";

  // display restart button
  restart_btn.style.display = "block";

  // calculate cpm and wpm
  cpm = Math.round((characterTyped / timeElapsed) * 60);
  wpm = Math.round((characterTyped / 5 / timeElapsed) * 60);

  // update cpm and wpm text
  cpm_text.textContent = cpm;
  wpm_text.textContent = wpm;

  // display the cpm and wpm
  cpm_group.style.display = "block";
  wpm_group.style.display = "block";

  document.getElementById("cpm").value = cpm_text.innerText;
  document.getElementById("wpm").value = wpm_text.innerText;
  document.getElementById("error").value = error_text.innerText;
  document.getElementById("accuracy").value = accuracy_text.innerText;
  document.getElementById("cpm").value = cpm_text.innerText;
  document.getElementById("time").value = DB_Time;
}

function startGame() {
  resetValues();
  updateQuote();

  // clear old and start a new timer
  clearInterval(timer);
  timer = setInterval(updateTimer, 1000);
}

function resetValues() {
  timeLeft = TIME_LIMIT;
  timeElapsed = 0;
  errors = 0;
  total_errors = 0;
  accuracy = 0;
  characterTyped = 0;
  quoteNo = 0;
  input_area.disabled = false;

  input_area.value = "";
  quote_text.textContent = "Click on the area below to start the game.";
  accuracy_text.textContent = 100;
  timer_text.textContent = timeLeft + "s";
  error_text.textContent = 0;
  restart_btn.style.display = "none";
  cpm_group.style.display = "none";
  wpm_group.style.display = "none";
}

input_area.onkeydown = function (event) {
  if (event.which == 8 || event.which == 46) {
    event.preventDefault(); // turn off browser transition to the previous page

    // alert(event.code);
  }
};
