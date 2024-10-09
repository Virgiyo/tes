// Skrip untuk menangani transisi halaman dan pengalihan mode gelap
document.querySelectorAll('.navbar a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Mencegah perilaku default tautan
        const target = this.getAttribute('href');

        // Simpan preferensi mode sebelum berpindah halaman
        const isDarkMode = document.body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', isDarkMode);

        // Pindah ke halaman baru
        window.location.href = target; // Mengarahkan ke URL yang dituju
    });
});

// Fungsi untuk memeriksa dan menerapkan preferensi mode gelap dari localStorage
function applyDarkMode() {
    const darkModeEnabled = localStorage.getItem('darkMode') === 'true'; // Memeriksa preferensi mode
    if (darkModeEnabled) {
        document.body.classList.add('dark-mode'); // Menambahkan kelas untuk mode gelap
        document.querySelector('.navbar').classList.add('dark-mode'); // Menambahkan kelas pada navbar
        toggleButton.innerHTML = '<i class="fas fa-sun"></i>'; // Ikon matahari untuk mode terang
    } else {
        document.body.classList.remove('dark-mode'); // Menghapus kelas mode gelap
        document.querySelector('.navbar').classList.remove('dark-mode'); // Menghapus kelas pada navbar
        toggleButton.innerHTML = '<i class="fas fa-moon"></i>'; // Ikon bulan untuk mode gelap
    }
}

// Pengalihan Mode Gelap
const toggleButton = document.getElementById('toggle-dark-mode');
toggleButton.addEventListener('click', () => {
    const isDarkMode = document.body.classList.toggle('dark-mode'); // Mengubah mode
    const navbar = document.querySelector('.navbar');
    navbar.classList.toggle('dark-mode'); // Menambahkan atau menghapus kelas mode gelap dari navbar
   
    // Mengubah ikon berdasarkan mode
    toggleButton.innerHTML = isDarkMode ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';

    // Menyimpan preferensi pengguna di localStorage
    localStorage.setItem('darkMode', isDarkMode);
});

// Menerapkan preferensi mode gelap saat halaman dimuat
applyDarkMode();