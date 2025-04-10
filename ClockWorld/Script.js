const timezones = [
    { name: "Bangkok", zone: "Asia/Bangkok" },      // กรุงเทพมหานคร
    { name: "Tokyo", zone: "Asia/Tokyo" },          // โตเกียว
    { name: "London", zone: "Europe/London" },      // ลอนดอน
    { name: "New York", zone: "America/New_York" }, // นิวยอร์ก
    { name: "Sydney", zone: "Australia/Sydney" }    // ซิดนีย์
];

// ฟังก์ชันเพื่ออัปเดตเวลาในทุกเขตเวลา
function updateClocks() {
    const clocksContainer = document.getElementById('clocks');
    clocksContainer.innerHTML = ''; // ล้างเนื้อหาเดิม

    timezones.forEach(({ name, zone }) => {
        const now = new Date();
        const options = {
            timeZone: zone,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        };
        const time = now.toLocaleTimeString('en-GB', options);

        // สร้าง HTML สำหรับแต่ละเขตเวลา
        const clockDiv = document.createElement('div');
        clockDiv.className = 'clock';
        clockDiv.innerHTML = `
            <div class="timezone">${name}</div>
            <div class="time">${time}</div>
        `;
        clocksContainer.appendChild(clockDiv);
    });
}

// อัปเดตเวลาแบบเรียลไทม์ทุกวินาที
setInterval(updateClocks, 1000);

// เรียกครั้งแรกเพื่อแสดงผลทันที
updateClocks();
