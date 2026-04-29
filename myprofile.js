let startTime = localStorage.getItem("startTime");

function startStreak() {
    if (!startTime) {
        startTime = new Date().getTime();
        localStorage.setItem("startTime", startTime);
    }
    updateStreak();
}


function resetStreak() {
    localStorage.removeItem("startTime");
    startTime = null;
    document.getElementById("streakDisplay").innerText = "0";
}


function relapseWarning() {
    alert("⚠️ Stay strong! You are in control.");
}


function updateStreak() {
    if (!startTime) return;

    setInterval(() => {
        let now = new Date().getTime();
        let diff = now - startTime;

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        document.getElementById("streakDisplay").innerText = days;

        let hours = (diff / (1000 * 60 * 60)) % 24;
        let percent = (hours / 24) * 100;

        document.querySelector(".circle").style.background =
            `conic-gradient(#a855f7 ${percent}%, #333 ${percent}%)`;

    }, 1000);
}


window.onload = () => {
    if (startTime) updateStreak();
};


const emojis = document.querySelectorAll('.emojis span');
emojis.forEach(emoji => {
    emoji.addEventListener('click', () => {
        emojis.forEach(e => e.style.transform = "scale(1)");
        emoji.style.transform = "scale(1.5)";
    });
});

//to do list

 const input = document.getElementById("taskInput");
        const addBtn = document.getElementById("addBtn");
        const list = document.getElementById("taskList");
        
        addBtn.addEventListener("click", addTask);

        function addTask(){
            const text = input.value.trim();
            if(text === " ") return;

            const li = document.createElement("li");
            li.className = "task";
            li.innerHTML = `<span>${text}</span>
            <div>
                <button onclick = "completeTask(this)">Done</button>
                <button onclick = "deleteTask(this)">Delete</button>
            </div>`;

            list.appendChild(li);
            input.value = "";
        }
        function completeTask(btn){
            const task = btn.closest(".task");
            task.classList.toggle("completed");
        }
        function deleteTask(btn){
            const task = btn.closest(".task");
            task.remove();
        }



        function saveEntry() {
    const input = document.getElementById("journalInput");
    const text = input.value.trim();

    if (text === "") return;

    const entry = {
        text: text,
        date: new Date().toLocaleString()
    };

    let entries = JSON.parse(localStorage.getItem("journalEntries")) || [];
    entries.unshift(entry);

    localStorage.setItem("journalEntries", JSON.stringify(entries));

    displayEntries();
    input.value = "";
}

function displayEntries() {
    const container = document.getElementById("journalEntries");
    container.innerHTML = "";

    let entries = JSON.parse(localStorage.getItem("journalEntries")) || [];

    entries.forEach(entry => {
        const div = document.createElement("div");
        div.classList.add("entry");

        div.innerHTML = `
            <p>${entry.text}</p>
            <small>${entry.date}</small>
        `;

        container.appendChild(div);
    });
}


window.onload = displayEntries;

            
        
    
