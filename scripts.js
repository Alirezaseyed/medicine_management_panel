
document.addEventListener('DOMContentLoaded', function() {
    showSection('dashboard');
});

function showSection(sectionId) {
    const sections = document.querySelectorAll('main section');
    sections.forEach(section => {
        if (section.id === sectionId) {
            section.classList.remove('hidden');
        } else {
            section.classList.add('hidden');
        }
    });
}

function addMedicine() {
    const medList = document.getElementById('med-list');
    const newMed = prompt('نام داروی جدید را وارد کنید:');
    if (newMed) {
        const listItem = document.createElement('li');
        listItem.textContent = newMed;
        medList.appendChild(listItem);
    }
}

function showCalendar(view) {
    const calendarContent = document.getElementById('calendar-content');
    calendarContent.innerHTML = `نمایش ${view}`;
}

function addReminder() {
    const reminderList = document.getElementById('reminder-list');
    const newReminder = prompt('زمان یادآور جدید را وارد کنید:');
    if (newReminder) {
        const listItem = document.createElement('li');
        listItem.textContent = newReminder;
        reminderList.appendChild(listItem);
    }
}

function showReport(view) {
    const reportContent = document.getElementById('report-content');
    reportContent.innerHTML = `نمایش گزارش ${view}`;
}
    