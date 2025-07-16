// Controller untuk berita desa

// Contoh data statik, sebaiknya ambil dari database
const berita = [
  {
    id: 1,
    judul: "Kegiatan Bersih Desa",
    isi: "Pada tanggal 1 Juli 2025 diadakan kegiatan bersih desa...",
    tanggal: "2025-07-01"
  }
];

exports.getBerita = (req, res) => {
  res.json(berita);
};

exports.getBeritaById = (req, res) => {
  const id = parseInt(req.params.id);
  const item = berita.find(b => b.id === id);
  if (item) {
    res.json(item);
  } else {
    res.status(404).json({ message: "Berita tidak ditemukan" });
  }
};