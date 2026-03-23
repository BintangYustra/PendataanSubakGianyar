<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendataan Perusahaan Makanan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 40px;
        }
        
        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }
        
        .required {
            color: #e74c3c;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
            font-family: inherit;
        }
        
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
        }
        
        .radio-option:hover {
            border-color: #667eea;
            background: #f8f9ff;
        }
        
        .radio-option input[type="radio"] {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        
        .radio-option.active {
            border-color: #667eea;
            background: #f8f9ff;
        }
        
        .dapur-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 2px solid #e0e0e0;
            position: relative;
        }
        
        .dapur-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .dapur-title {
            font-size: 18px;
            font-weight: 600;
            color: #667eea;
        }
        
        .btn-remove {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: all 0.3s;
        }
        
        .btn-remove:hover {
            background: #c0392b;
            transform: scale(1.05);
        }
        
        .upload-area {
            border: 2px dashed #d0d0d0;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            background: white;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .upload-area:hover {
            border-color: #667eea;
            background: #f8f9ff;
        }
        
        .upload-area.dragover {
            border-color: #667eea;
            background: #f8f9ff;
        }
        
        .upload-icon {
            font-size: 40px;
            color: #667eea;
            margin-bottom: 10px;
        }
        
        .upload-text {
            color: #666;
            font-size: 14px;
        }
        
        .upload-note {
            color: #999;
            font-size: 12px;
            margin-top: 5px;
        }
        
        .image-preview {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        
        .preview-item {
            position: relative;
            width: 120px;
            height: 120px;
            border-radius: 8px;
            overflow: hidden;
            border: 2px solid #e0e0e0;
        }
        
        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .preview-remove {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(231, 76, 60, 0.9);
            color: white;
            border: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        
        .preview-remove:hover {
            background: #c0392b;
            transform: scale(1.1);
        }
        
        .btn-add-dapur {
            background: #27ae60;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .btn-add-dapur:hover {
            background: #229954;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(39, 174, 96, 0.3);
        }
        
        .btn-submit {
            background: #667eea;
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
            margin-top: 20px;
        }
        
        .btn-submit:hover {
            background: #5568d3;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
        
        .btn-submit:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }
        
        .error-message.show {
            display: block;
        }
        
        .photo-count {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
        
        .alert {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .alert-info {
            background: #e3f2fd;
            color: #1976d2;
            border: 1px solid #90caf9;
        }
        
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Form Pendataan Perusahaan Makanan</h1>
        <p class="subtitle">Lengkapi data perusahaan dan dapur Anda dengan benar</p>
        
        <?php echo form_open_multipart('perusahaan/simpan', ['id' => 'formPerusahaan']); ?>
        
        <!-- Data Perusahaan -->
        <div class="form-group">
            <label>Nama Perusahaan <span class="required">*</span></label>
            <input type="text" name="nama_perusahaan" id="nama_perusahaan" required placeholder="Contoh: PT Makanan Sehat Indonesia">
        </div>
        
        <div class="form-group">
            <label>Nama Pemilik <span class="required">*</span></label>
            <input type="text" name="nama_pemilik" id="nama_pemilik" required placeholder="Nama lengkap pemilik perusahaan">
        </div>
        
        <div class="form-group">
            <label>Email Perusahaan <span class="required">*</span></label>
            <input type="email" name="email_perusahaan" id="email_perusahaan" required placeholder="email@perusahaan.com">
        </div>
        
        <div class="form-group">
            <label>Nomor Telepon <span class="required">*</span></label>
            <input type="tel" name="telepon_perusahaan" id="telepon_perusahaan" required placeholder="08xxxxxxxxxx">
        </div>
        
        <div class="form-group">
            <label>Alamat Perusahaan <span class="required">*</span></label>
            <textarea name="alamat_perusahaan" id="alamat_perusahaan" required placeholder="Alamat lengkap perusahaan"></textarea>
        </div>
        
        <!-- Tipe Perusahaan -->
        <div class="form-group">
            <label>Tipe Perusahaan <span class="required">*</span></label>
            <div class="radio-group">
                <label class="radio-option" id="option-single">
                    <input type="radio" name="tipe_perusahaan" value="single" required>
                    <span>🏠 1 Dapur</span>
                </label>
                <label class="radio-option" id="option-multiple">
                    <input type="radio" name="tipe_perusahaan" value="multiple" required>
                    <span>🏢 Lebih dari 1 Dapur</span>
                </label>
            </div>
        </div>
        
        <div class="alert alert-info">
            <strong>ℹ️ Informasi:</strong> Setiap dapur wajib memiliki minimal 3 foto (maksimal 10 foto per dapur)
        </div>
        
        <!-- Container Dapur -->
        <div id="dapur-container"></div>
        
        <!-- Button Tambah Dapur (hidden by default) -->
        <button type="button" class="btn-add-dapur hidden" id="btn-add-dapur">
            <span>➕</span> Tambah Dapur Baru
        </button>
        
        <!-- Submit Button -->
        <button type="submit" class="btn-submit" id="btn-submit">
            💾 Simpan Data Perusahaan
        </button>
        
        <?php echo form_close(); ?>
    </div>
    
    <script>
        let dapurCount = 0;
        const dapurData = {};
        
        // Event listener untuk radio button
        document.querySelectorAll('input[name="tipe_perusahaan"]').forEach(radio => {
            radio.addEventListener('change', function() {
                // Update active state
                document.querySelectorAll('.radio-option').forEach(opt => opt.classList.remove('active'));
                this.parentElement.classList.add('active');
                
                // Clear existing dapur
                document.getElementById('dapur-container').innerHTML = '';
                dapurCount = 0;
                Object.keys(dapurData).forEach(key => delete dapurData[key]);
                
                if (this.value === 'single') {
                    document.getElementById('btn-add-dapur').classList.add('hidden');
                    addDapur(true);
                } else {
                    document.getElementById('btn-add-dapur').classList.remove('hidden');
                    addDapur(false);
                }
            });
        });
        
        // Add dapur button
        document.getElementById('btn-add-dapur').addEventListener('click', function() {
            addDapur(false);
        });
        
        function addDapur(isSingle) {
            dapurCount++;
            const dapurId = `dapur_${dapurCount}`;
            dapurData[dapurId] = {
                files: [],
                previews: []
            };
            
            const dapurHTML = `
                <div class="dapur-section" id="${dapurId}">
                    <div class="dapur-header">
                        <div class="dapur-title">
                            ${isSingle ? '🏠 Data Dapur' : `🏭 Dapur #${dapurCount}`}
                        </div>
                        ${!isSingle ? `<button type="button" class="btn-remove" onclick="removeDapur('${dapurId}')">🗑️ Hapus</button>` : ''}
                    </div>
                    
                    <div class="form-group">
                        <label>Nama Dapur <span class="required">*</span></label>
                        <input type="text" name="nama_dapur[]" required placeholder="Contoh: Dapur Pusat Jakarta">
                    </div>
                    
                    <div class="form-group">
                        <label>Lokasi Dapur <span class="required">*</span></label>
                        <textarea name="lokasi_dapur[]" required placeholder="Alamat lengkap lokasi dapur"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Foto Dapur <span class="required">*</span> <span class="photo-count" id="count_${dapurId}">(0/10 foto)</span></label>
                        <div class="upload-area" id="upload_${dapurId}" onclick="document.getElementById('file_${dapurId}').click()">
                            <div class="upload-icon">📸</div>
                            <div class="upload-text">Klik atau drag & drop untuk upload foto</div>
                            <div class="upload-note">Minimal 3 foto, maksimal 10 foto (JPG, PNG, max 2MB per foto)</div>
                        </div>
                        <input type="file" id="file_${dapurId}" accept="image/jpeg,image/jpg,image/png" multiple style="display: none;">
                        <div class="error-message" id="error_${dapurId}"></div>
                        <div class="image-preview" id="preview_${dapurId}"></div>
                    </div>
                </div>
            `;
            
            document.getElementById('dapur-container').insertAdjacentHTML('beforeend', dapurHTML);
            initializeUpload(dapurId);
        }
        
        function removeDapur(dapurId) {
            if (confirm('Apakah Anda yakin ingin menghapus data dapur ini?')) {
                document.getElementById(dapurId).remove();
                delete dapurData[dapurId];
                
                // Renumber remaining dapur
                const remaining = document.querySelectorAll('.dapur-section');
                remaining.forEach((section, index) => {
                    const title = section.querySelector('.dapur-title');
                    if (title && remaining.length > 1) {
                        title.textContent = `🏭 Dapur #${index + 1}`;
                    }
                });
            }
        }
        
        function initializeUpload(dapurId) {
            const fileInput = document.getElementById(`file_${dapurId}`);
            const uploadArea = document.getElementById(`upload_${dapurId}`);
            const previewArea = document.getElementById(`preview_${dapurId}`);
            const errorMsg = document.getElementById(`error_${dapurId}`);
            const countSpan = document.getElementById(`count_${dapurId}`);
            
            // Drag and drop
            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.classList.add('dragover');
            });
            
            uploadArea.addEventListener('dragleave', () => {
                uploadArea.classList.remove('dragover');
            });
            
            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.classList.remove('dragover');
                handleFiles(e.dataTransfer.files, dapurId);
            });
            
            // File input change
            fileInput.addEventListener('change', (e) => {
                handleFiles(e.target.files, dapurId);
            });
        }
        
        function handleFiles(files, dapurId) {
            const errorMsg = document.getElementById(`error_${dapurId}`);
            const previewArea = document.getElementById(`preview_${dapurId}`);
            const countSpan = document.getElementById(`count_${dapurId}`);
            
            errorMsg.textContent = '';
            errorMsg.classList.remove('show');
            
            const currentCount = dapurData[dapurId].files.length;
            const newCount = currentCount + files.length;
            
            if (newCount > 10) {
                errorMsg.textContent = `Maksimal 10 foto per dapur. Anda sudah memiliki ${currentCount} foto.`;
                errorMsg.classList.add('show');
                return;
            }
            
            Array.from(files).forEach(file => {
                // Validate file type
                if (!file.type.match('image/(jpeg|jpg|png)')) {
                    errorMsg.textContent = 'Hanya file JPG, JPEG, dan PNG yang diperbolehkan';
                    errorMsg.classList.add('show');
                    return;
                }
                
                // Validate file size (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    errorMsg.textContent = 'Ukuran file maksimal 2MB';
                    errorMsg.classList.add('show');
                    return;
                }
                
                dapurData[dapurId].files.push(file);
                
                // Create preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    const previewId = `preview_${dapurId}_${Date.now()}_${Math.random()}`;
                    const previewHTML = `
                        <div class="preview-item" id="${previewId}">
                            <img src="${e.target.result}" alt="Preview">
                            <button type="button" class="preview-remove" onclick="removeImage('${dapurId}', '${previewId}', ${dapurData[dapurId].files.length - 1})">×</button>
                        </div>
                    `;
                    previewArea.insertAdjacentHTML('beforeend', previewHTML);
                    dapurData[dapurId].previews.push(previewId);
                    updatePhotoCount(dapurId);
                };
                reader.readAsDataURL(file);
            });
        }
        
        function removeImage(dapurId, previewId, fileIndex) {
            document.getElementById(previewId).remove();
            dapurData[dapurId].files.splice(fileIndex, 1);
            const previewIndex = dapurData[dapurId].previews.indexOf(previewId);
            if (previewIndex > -1) {
                dapurData[dapurId].previews.splice(previewIndex, 1);
            }
            updatePhotoCount(dapurId);
        }
        
        function updatePhotoCount(dapurId) {
            const count = dapurData[dapurId].files.length;
            const countSpan = document.getElementById(`count_${dapurId}`);
            countSpan.textContent = `(${count}/10 foto)`;
            
            if (count >= 3) {
                countSpan.style.color = '#27ae60';
            } else {
                countSpan.style.color = '#e74c3c';
            }
        }
        
        // Form validation
        document.getElementById('formPerusahaan').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            let errorMessages = [];
            
            // Check if tipe perusahaan is selected
            const tipeSelected = document.querySelector('input[name="tipe_perusahaan"]:checked');
            if (!tipeSelected) {
                errorMessages.push('Silakan pilih tipe perusahaan');
                isValid = false;
            }
            
            // Validate each dapur
            Object.keys(dapurData).forEach(dapurId => {
                const photoCount = dapurData[dapurId].files.length;
                if (photoCount < 3) {
                    errorMessages.push(`${dapurId.replace('_', ' ')}: Minimal 3 foto diperlukan (saat ini: ${photoCount})`);
                    isValid = false;
                    
                    const errorMsg = document.getElementById(`error_${dapurId}`);
                    errorMsg.textContent = `Minimal 3 foto diperlukan (saat ini: ${photoCount})`;
                    errorMsg.classList.add('show');
                }
            });
            
            if (!isValid) {
                alert('⚠️ Validasi Gagal:\n\n' + errorMessages.join('\n'));
                return false;
            }
            
            // Create FormData
            const formData = new FormData(this);
            
            // Add photos for each dapur
            Object.keys(dapurData).forEach(dapurId => {
                dapurData[dapurId].files.forEach((file, index) => {
                    formData.append(`foto_dapur_${dapurId}[]`, file);
                });
            });
            
            // Submit via AJAX or regular submit
            // For demo, just show success message
            if (confirm('✅ Data valid!\n\nApakah Anda yakin ingin menyimpan data ini?')) {
                // Uncomment below for actual AJAX submission
                /*
                fetch('<?php echo base_url("perusahaan/simpan"); ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Data berhasil disimpan!');
                        window.location.href = '<?php echo base_url("perusahaan"); ?>';
                    } else {
                        alert('Gagal menyimpan data: ' + data.message);
                    }
                })
                .catch(error => {
                    alert('Terjadi kesalahan: ' + error.message);
                });
                */
                
                // For demo
                this.submit();
            }
        });
    </script>
</body>
</html>