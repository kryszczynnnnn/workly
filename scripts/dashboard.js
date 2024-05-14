window.onload = function () {
    renderCalendar();
}

function renderCalendar() {

    const calendar = document.getElementById("calendar");
    
    const currentDate = new Date();
    const month = currentDate.getMonth();
    const year = currentDate.getFullYear();
    const today = currentDate.getDate()
    
    const firtsDayOfMonth = new Date(year, month, 1);
    const lastDayOfMonth = new Date(year, month + 1, 0);
    
    const firstDayOfWeek = firtsDayOfMonth.getDay();
    const totalDays = lastDayOfMonth.getDate();
    
    for (let i = 1; i < firstDayOfWeek; i++) {
        let blankDay = document.createElement("div");
        calendar.appendChild(blankDay);
    }
    
    for (let day = 1; day <= totalDays; day++) {
        let dayBox = document.createElement("div");
        let dayText = document.createElement("span");
        dayBox.className = "calendar-day";
        dayBox.id = `day-${day}`;
        dayText.textContent = day;
        dayBox.style.textAlign = "center";
        dayBox.appendChild(dayText);
        calendar.appendChild(dayBox);
    }
    
    const today_box = document.getElementById(`day-${today}`);
    today_box.style.backgroundColor = "#292828";
    today_box.style.color = "#fff";
    
}