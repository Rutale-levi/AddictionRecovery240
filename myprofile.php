<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery Dashboard</title>
    <link rel="stylesheet" href="CSS/myprofile.css">
    <title>Profile</title>
</head>
<body>


    <h1>Welcome <?php echo $_SESSION['email']; ?> </h1>

<div class="dashboard">

    <aside class="sidebar">
        <h2>My Profile</h2>
        <ul>
            <li><a href="myprofile.html">Dashboard</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="">To-do</a></li>
            <li><a href="">LogOut</a></li>
            
        </ul>
    </aside>

    <main class="main">

        <h1>Welcome Back 👋</h1>

        
        <div class="section">
            <h3>Select Addiction Type</h3>
            <select id="addiction">
                <option>Alcohol</option>
                <option>Smoking</option>
                <option>Drug Abuse</option>
                <option>Gambling</option>
                <option>Social Media</option>
                <option>Sex</option>
                <option>Pornography</option>
            </select>
        </div>

        <div class="section">
            <h3>Recovery Streak</h3>

            <div class="circle">
                <span id="streakDisplay">0</span>
                <p>Days</p>
            </div>

            <div class="buttons">
                <button onclick="startStreak()">Start Streak</button>
                <button onclick="resetStreak()">Reset</button>
                <button onclick="relapseWarning()">Relapse Warning</button>
            </div>
        </div>

        <div class="section">
            <h3>How do you feel today?</h3>

            <div class="emojis">
                <span onclick="selectMood('happy')">😊</span>
                <span onclick="selectMood('neutral')">🙂</span>
                <span onclick="selectMood('confused')">😐</span>
                <span onclick="selectMood('angry')">😡</span>
                <span onclick="selectMood('bored')">😴</span>
            </div>
        </div>


 <script>
function selectMood(mood) {
  alert("You selected: " + mood);

  
  const emojis = document.querySelectorAll(".emojis span");
  emojis.forEach(e => e.classList.remove("selected"));

  event.target.classList.add("selected");
}
</script>


        <div class="section">
            <h3>My Daily Goals</h3>
            <p>When entering recovery, abstaining from substances, or engaging in treatment, there is a lot to think about, and for many of us, a lot of changes that have to be made. One area that often gets overlooked is our daily schedule.</p><br>
            <p> It’s common for people in active addiction to struggle sticking to a schedule. This is because they frequently lack the discipline to complete everyday tasks. Personally, I struggled to be on time, to remember my commitments, and to show up in general. It is essential to create a schedule early in recovery because it will help us avoid  common triggers like boredom and idle time.</p>
            <br>


<p>When creating a schedule, it’s important to consider and prioritize the key things you need to do each day for health and wellness. The daily schedule will look different for each person, but they will include the tasks and activities that you need to adhere to on a daily basis to prevent relapse and to set yourself up for success.</p>
<br><p>The following are a few examples of what might be included in a plan:

Support system: check-in with the people that support my recovery (e.g., sponsor, supportive family and friends)

Attitude of gratitude: express gratitude in some way (e.g., add three items to my gratitude list)

Motivation: Am I recovery motivated today? And if not, what can I do to improve my motivation?

Exercise: go to the gym, go for a walk, or stretch

Eating habits: eat a salad for lunch or don’t eat that third cookie

Sleep: go to bed early enough that I will get 8 hours of sleep.</p>
<br>  

<p>Over the next two weeks, take some time to reflect on the things that you need to do daily to remain in a healthy mindset mentally, physically, emotionally, and spiritually.<br>
 Your daily plan may look like the one above, or it may be completely different. That’s fine! Your plan should be individually-tailored to you. 


Download the worksheet below and answer the questions to dig into what your daily routine looks like, how you can add to it, and what your schedule looks like.</p>
       
            <div class="todo-container">
        <h2>My To Do list</h2>
        

        <div class="todo-input">
            <input type="text" id="taskInput" placeholder="Enter Task...">
            <button id="addBtn">Add</button>
        </div>

        <ul id="taskList"></ul>
    </div>

     <h2>Benefits to take from this</h2>
        <p>Recovery can feel overwhelming some days—like everything is too much to handle at once. <br>
            That’s where a simple to-do list can really help. It gives you a way to break things down into small, doable steps so you’re not carrying the whole weight of the day at once.<br>
            <p>
             Even checking off one task can give you a sense of progress, a reminder that you’re moving forward, even if it’s slowly.</p>
             <br>
              <p>Over time, those small wins start to add up, helping you rebuild confidence and create a routine that supports you instead of working against you.</p>
              <br>
             <p>It’s not about being perfect—it’s about taking things one step at a time and recognizing that each step matters.</p>
</p>

        </div>
        <div class="journal-container">
    <h2>Daily Journal</h2>

    <textarea id="journalInput" placeholder="Write how you feel today..."></textarea>

    <button onclick="saveEntry()">Save Entry</button>

    <div id="journalEntries"></div>
</div>

        <div class="feature-section">
            <h2>Support Tools</h2>

            <div class="cards">
                <div class="card">
                    <img src="Assets/talktosomeone.jpg">
                    <h3>Talk to Someone</h3>
                    <p>Connect with support groups anytime.</p>
                </div>

                <div class="card">
                    <img src="Assets/meet.jpg">
                    <h3>Find Meetings</h3>
                    <p>Locate nearby recovery meetings.</p>
                </div>

                <div class="card">
                     <img src="Assets/resources.jpg">
                    <h3>Resources</h3>
                    <p>Locate nearby recovery meetings.</p>
                </div>
                    
                    
                    <p>Learn how to stay strong and avoid relapse.</p>
                </div>
            </div>
        </div>

    </main>

</div>
<script src="myprofile.js"></script>


<footer>
    <footer class="footer">
  <div class="footer-content">
    <div>
      <h4>Contact Us</h4>
      <p><a href="leviklein017@gmail.com">Email: recovery@email.com</a></p>
      <p>Phone: +256 700 000000</p>
      <p>Location: Kampala, Uganda</p>
    </div>

    <div>
      <h4>Quick Links</h4>
      <p>Home</p>
      <p>Journal</p>
      <p>Support</p>
    </div>
  </div>

  <p class="footer-bottom">© 2026 Your Website</p>
</footer>
</footer>


<a href="logout.php">Logout</a>

</body>
</html>