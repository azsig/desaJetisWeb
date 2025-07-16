// Controller untuk data statik dan statistik desa

exports.getDeskripsi = (req, res) => {
  res.json({
    nama: "Desa Jetis",
    deskripsi: "Desa Jetis adalah desa yang ...",
    visi: "Menjadi desa maju dan mandiri",
    misi: "Meningkatkan kesejahteraan masyarakat",
    struktur: [
      { jabatan: "Kepala Desa", nama: "Budi" },
      { jabatan: "Sekretaris", nama: "Siti" }
    ]
  });
};

exports.getStatistik = (req, res) => {
  // Data ini sebaiknya diambil dari database, contoh statik dulu
  res.json({
    tahun: 2025,
    jumlah_penduduk: 1200,
    jumlah_kk: 350,
    jumlah_laki_laki: 600,
    jumlah_perempuan: 600
  });
};