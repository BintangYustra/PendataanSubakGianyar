<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Tanda Tangan Digital</title>
    
    <!-- Signature Pad Library -->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
    
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
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
            font-family: inherit;
        }
        
        input:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        /* Signature Pad Styles */
        .signature-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
            border: 2px solid #e0e0e0;
        }
        
        .signature-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .signature-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }
        
        .signature-canvas-wrapper {
            background: white;
            border: 2px solid #667eea;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        #signature-canvas {
            display: block;
            width: 100%;
            height: 200px;
            cursor: crosshair;
            touch-action: none;
        }
        
        .signature-controls {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-clear {
            background: #e74c3c;
            color: white;
        }
        
        .btn-clear:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        
        .btn-undo {
            background: #f39c12;
            color: white;
        }
        
        .btn-undo:hover {
            background: #e67e22;
        }
        
        .btn-color {
            padding: 8px 15px;
            border: 2px solid #e0e0e0;
            background: white;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-color.active {
            border-color: #667eea;
            transform: scale(1.1);
        }
        
        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-block;
            border: 2px solid #e0e0e0;
        }
        
        .pen-width-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .pen-width-slider {
            width: 150px;
        }
        
        .signature-info {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 12px 15px;
            border-radius: 5px;
            font-size: 13px;
            color: #1565c0;
            margin-top: 15px;
        }
        
        .signature-preview {
            margin-top: 15px;
            padding: 15px;
            background: #fff3cd;
            border-radius: 8px;
            border: 1px solid #ffc107;
        }
        
        .signature-preview h4 {
            font-size: 14px;
            color: #856404;
            margin-bottom: 10px;
        }
        
        .signature-preview img {
            max-width: 100%;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            background: white;
            padding: 10px;
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
        
        .alert-warning {
            background: #fff3cd;
            color: #856404;
            border: 1px solid #ffc107;
        }
        
        .device-info {
            font-size: 12px;
            color: #666;
            margin-top: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        
        @media (max-width: 768px) {
            #signature-canvas {
                height: 150px;
            }
            
            .signature-controls {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✍️ Form Pendataan dengan Tanda Tangan Digital</h1>
        <p class="subtitle">Gunakan pen tablet, stylus, atau mouse untuk tanda tangan digital</p>
        
        <div class="alert alert-info">
            <strong>ℹ️ Info Pen Tablet:</strong> 
            Sistem ini mendukung pen tablet Wacom, Huion, XP-Pen, dan stylus lainnya. 
            Tanda tangan akan tersimpan sebagai gambar digital.
        </div>
        
        <?php echo form_open_multipart('perusahaan/simpan_dengan_ttd', ['id' => 'formTTD']); ?>
        
        <!-- Data Perusahaan -->
        <div class="form-group">
            <label>Nama Perusahaan <span class="required">*</span></label>
            <input type="text" name="nama_perusahaan" required placeholder="Nama perusahaan Anda">
        </div>
        
        <div class="form-group">
            <label>Nama Pemilik <span class="required">*</span></label>
            <input type="text" name="nama_pemilik" id="nama_pemilik" required placeholder="Nama lengkap pemilik">
        </div>
        
        <div class="form-group">
            <label>Email <span class="required">*</span></label>
            <input type="email" name="email_perusahaan" required placeholder="email@perusahaan.com">
        </div>
        
        <!-- Signature Section -->
        <div class="signature-section">
            <div class="signature-header">
                <div class="signature-title">✍️ Tanda Tangan Digital</div>
                <span style="font-size: 12px; color: #666;">Gunakan pen tablet atau mouse</span>
            </div>
            
            <div class="signature-canvas-wrapper">
                <canvas id="signature-canvas"></canvas>
            </div>
            
            <div class="signature-controls">
                <button type="button" class="btn btn-clear" onclick="clearSignature()">
                    🗑️ Hapus
                </button>
                <button type="button" class="btn btn-undo" onclick="undoSignature()">
                    ↶ Undo
                </button>
                
                <div style="display: flex; gap: 5px; align-items: center;">
                    <span style="font-size: 13px; color: #666;">Warna:</span>
                    <button type="button" class="btn-color active" onclick="changeColor('#000000', this)">
                        <span class="color-option" style="background: #000000;"></span>
                    </button>
                    <button type="button" class="btn-color" onclick="changeColor('#0000FF', this)">
                        <span class="color-option" style="background: #0000FF;"></span>
                    </button>
                    <button type="button" class="btn-color" onclick="changeColor('#FF0000', this)">
                        <span class="color-option" style="background: #FF0000;"></span>
                    </button>
                </div>
                
                <div class="pen-width-control">
                    <span style="font-size: 13px; color: #666;">Ketebalan:</span>
                    <input type="range" class="pen-width-slider" min="1" max="5" value="2" 
                           onchange="changePenWidth(this.value)">
                    <span id="width-display" style="font-size: 13px; color: #666;">2px</span>
                </div>
            </div>
            
            <div class="signature-info">
                💡 <strong>Tips:</strong> 
                Untuk hasil terbaik dengan pen tablet, pastikan pressure sensitivity aktif. 
                Tanda tangan akan tersimpan dalam format PNG dengan transparansi.
            </div>
            
            <div class="device-info" id="device-info">
                📱 Detecting device...
            </div>
        </div>
        
        <!-- Hidden input untuk signature data -->
        <input type="hidden" name="signature_data" id="signature_data">
        
        <!-- Preview Section -->
        <div class="signature-preview" id="signature-preview" style="display: none;">
            <h4>Preview Tanda Tangan:</h4>
            <img id="signature-image" src="" alt="Signature Preview">
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn-submit" id="btn-submit">
            💾 Simpan Data dengan Tanda Tangan
        </button>
        
        <?php echo form_close(); ?>
    </div>
    
    <script>
        // Initialize Signature Pad
        const canvas = document.getElementById('signature-canvas');
        const signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)',
            penColor: '#000000',
            minWidth: 1,
            maxWidth: 2,
            velocityFilterWeight: 0.7,
            throttle: 16 // 60fps
        });
        
        // Resize canvas
        function resizeCanvas() {
            const ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
            signaturePad.clear(); // Clear after resize
        }
        
        // Initialize
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();
        
        // Detect device and pressure support
        function detectDevice() {
            const infoDiv = document.getElementById('device-info');
            let info = [];
            
            // Check for pen/stylus support
            if (window.PointerEvent) {
                info.push('✅ Pen/Stylus support detected');
            } else {
                info.push('⚠️ Basic touch support only');
            }
            
            // Check for pressure sensitivity
            canvas.addEventListener('pointerdown', function(e) {
                if (e.pressure && e.pressure > 0 && e.pressure < 1) {
                    info.push('✅ Pressure sensitivity active');
                    infoDiv.innerHTML = info.join(' | ');
                }
            }, { once: true });
            
            // Device type
            if (navigator.maxTouchPoints > 0) {
                info.push('📱 Touch device detected');
            } else {
                info.push('🖱️ Mouse/Pen tablet detected');
            }
            
            infoDiv.innerHTML = info.join(' | ');
        }
        
        detectDevice();
        
        // Handle pen pressure
        canvas.addEventListener('pointermove', function(e) {
            if (e.pressure !== undefined && e.pressure > 0) {
                // Adjust pen width based on pressure
                const minWidth = 0.5;
                const maxWidth = 3.5;
                const width = minWidth + (e.pressure * (maxWidth - minWidth));
                signaturePad.minWidth = width - 0.5;
                signaturePad.maxWidth = width + 0.5;
            }
        });
        
        // Clear signature
        function clearSignature() {
            signaturePad.clear();
            document.getElementById('signature-preview').style.display = 'none';
            document.getElementById('signature_data').value = '';
        }
        
        // Undo last stroke
        function undoSignature() {
            const data = signaturePad.toData();
            if (data && data.length > 0) {
                data.pop(); // Remove last stroke
                signaturePad.fromData(data);
            }
        }
        
        // Change pen color
        function changeColor(color, button) {
            signaturePad.penColor = color;
            
            // Update active button
            document.querySelectorAll('.btn-color').forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
        }
        
        // Change pen width
        function changePenWidth(width) {
            const widthNum = parseFloat(width);
            signaturePad.minWidth = widthNum - 0.5;
            signaturePad.maxWidth = widthNum + 0.5;
            document.getElementById('width-display').textContent = widthNum + 'px';
        }
        
        // Update preview when drawing
        signaturePad.addEventListener('endStroke', function() {
            updatePreview();
        });
        
        // Update preview image
        function updatePreview() {
            if (!signaturePad.isEmpty()) {
                const dataURL = signaturePad.toDataURL('image/png');
                document.getElementById('signature-image').src = dataURL;
                document.getElementById('signature-preview').style.display = 'block';
                document.getElementById('signature_data').value = dataURL;
            }
        }
        
        // Form validation
        document.getElementById('formTTD').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Check if signature is empty
            if (signaturePad.isEmpty()) {
                alert('⚠️ Tanda tangan belum dibuat!\n\nSilakan buat tanda tangan terlebih dahulu.');
                return false;
            }
            
            // Get signature data
            const signatureData = signaturePad.toDataURL('image/png');
            document.getElementById('signature_data').value = signatureData;
            
            // Get name for filename
            const namaPemilik = document.getElementById('nama_pemilik').value;
            
            // Show confirmation
            if (confirm(`✅ Konfirmasi Pengiriman\n\nNama: ${namaPemilik}\nTanda tangan: Sudah dibuat\n\nApakah data sudah benar?`)) {
                // Submit form
                this.submit();
            }
        });
        
        // Prevent accidental page leave
        window.addEventListener('beforeunload', function(e) {
            if (!signaturePad.isEmpty()) {
                e.preventDefault();
                e.returnValue = '';
            }
        });
        
        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl+Z for undo
            if (e.ctrlKey && e.key === 'z') {
                e.preventDefault();
                undoSignature();
            }
            
            // Ctrl+C for clear
            if (e.ctrlKey && e.key === 'c') {
                e.preventDefault();
                clearSignature();
            }
        });
    </script>
</body>
</html>