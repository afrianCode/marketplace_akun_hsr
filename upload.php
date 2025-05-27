<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Akun Honkai Star Rail</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&family=Inter:wght@300;400;500;600;700&display=swap');

        /* Root Variables */
        :root {
            --primary-purple: #7C4DFF;
            --primary-blue: #2196F3;
            --primary-gold: #FFD700;
            --secondary-purple: #9C27B0;
            --dark-bg: #0a0a0a;
            --card-bg: #1a1a1a;
            --surface-bg: #2a2a2a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --text-accent: #FFD700;
            --border-color: #3a3a3a;
            --shadow-glow: rgba(124, 77, 255, 0.3);
            --shadow-card: rgba(0, 0, 0, 0.5);
            --gradient-primary: linear-gradient(135deg, #7C4DFF 0%, #2196F3 100%);
            --gradient-secondary: linear-gradient(135deg, #9C27B0 0%, #7C4DFF 100%);
            --gradient-card: linear-gradient(145deg, #1a1a1a 0%, #2a2a2a 100%);
            --success-green: #4CAF50;
            --error-red: #f44336;
        }

        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-bg);
            color: var(--text-primary);
            line-height: 1.6;
            min-height: 100vh;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(124, 77, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(33, 150, 243, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(156, 39, 176, 0.05) 0%, transparent 50%);
            background-attachment: fixed;
            padding: 20px;
            animation: backgroundShift 20s ease-in-out infinite;
        }

        @keyframes backgroundShift {
            0%, 100% { background-position: 0% 0%, 100% 100%, 50% 50%; }
            50% { background-position: 100% 0%, 0% 100%, 30% 70%; }
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        /* Header Styles */
        .header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        h1 {
            font-family: 'Orbitron', monospace;
            font-weight: 700;
            font-size: 2.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            position: relative;
            animation: glow 3s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { filter: drop-shadow(0 0 10px rgba(124, 77, 255, 0.5)); }
            to { filter: drop-shadow(0 0 20px rgba(124, 77, 255, 0.8)); }
        }

        .subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            font-weight: 300;
        }

        /* Navigation */
        .nav-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--gradient-secondary);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(124, 77, 255, 0.4);
        }

        .nav-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(124, 77, 255, 0.6);
        }

        /* Form Container */
        .form-container {
            background: var(--gradient-card);
            border-radius: 25px;
            padding: 3rem;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
            box-shadow: 0 20px 40px var(--shadow-card);
            backdrop-filter: blur(10px);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-primary);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 2rem;
            position: relative;
        }

        .form-group label {
            display: block;
            font-family: 'Orbitron', monospace;
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--text-accent);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px 20px;
            background: var(--surface-bg);
            border: 2px solid var(--border-color);
            border-radius: 15px;
            color: var(--text-primary);
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--primary-purple);
            box-shadow: 0 0 20px rgba(124, 77, 255, 0.3);
            background: var(--card-bg);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
            font-family: 'Inter', sans-serif;
        }

        /* Input Icons */
        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            font-size: 1.2rem;
            pointer-events: none;
            margin-top: 12px;
        }

        /* Button Styles */
        .btn-container {
            display: flex;
            gap: 1rem;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 35px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow: hidden;
            flex: 1;
            justify-content: center;
            min-width: 150px;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 8px 20px rgba(124, 77, 255, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-secondary);
            border: 2px solid var(--border-color);
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .btn-primary:hover {
            box-shadow: 0 12px 30px rgba(124, 77, 255, 0.6);
        }

        .btn-secondary:hover {
            border-color: var(--primary-gold);
            color: var(--primary-gold);
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.3);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        /* Success/Error Messages */
        .message {
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 2rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: messageSlide 0.5s ease-out;
        }

        @keyframes messageSlide {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .message-success {
            background: rgba(76, 175, 80, 0.1);
            color: var(--success-green);
            border: 1px solid var(--success-green);
        }

        .message-error {
            background: rgba(244, 67, 54, 0.1);
            color: var(--error-red);
            border: 1px solid var(--error-red);
        }

        /* Loading State */
        .btn-loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 2.5rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid var(--border-color);
        }

        .form-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .section-title {
            font-family: 'Orbitron', monospace;
            font-size: 1.2rem;
            color: var(--text-accent);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .nav-back {
                position: relative;
                top: 0;
                left: 0;
                margin-bottom: 2rem;
                display: inline-flex;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .form-container {
                padding: 2rem;
            }
            
            .btn-container {
                flex-direction: column;
            }
            
            .btn {
                flex: none;
                width: 100%;
            }
        }

        /* Star Field Animation */
        .star-field {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .star {
            position: absolute;
            background: white;
            border-radius: 50%;
            animation: twinkle 2s infinite;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        /* Custom Select Styling */
        .select-wrapper {
            position: relative;
        }

        .select-wrapper::after {
            content: '▼';
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            pointer-events: none;
            margin-top: 12px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
    </style>
</head>
<body>
    <div class="star-field" id="starField"></div>
    
    <a href="index.php" class="nav-back">
        <span>←</span> Kembali ke Home
    </a>

    <div class="container">
        <div class="header">
            <h1>📤 UPLOAD AKUN</h1>
            <p class="subtitle">Jual akun Honkai Star Rail Anda dengan mudah dan aman</p>
        </div>

        <div class="form-container">
            <form method="post" id="uploadForm">
                <div class="form-section">
                    <div class="section-title">
                        <span>🔐</span> Informasi Login
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required placeholder="Masukkan username akun">
                        <div class="input-icon">👤</div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required placeholder="Masukkan password akun">
                        <div class="input-icon">🔒</div>
                    </div>
                </div>

                <div class="form-section">
                    <div class="section-title">
                        <span>⭐</span> Detail Akun
                    </div>
                    
                    <div class="form-group">
                        <label for="tipe_akun">Tipe Akun</label>
                        <div class="select-wrapper">
                            <select name="tipe_akun" id="tipe_akun" required>
                                <option value="">Pilih tipe akun...</option>
                                <option value="Starter Account">Starter Account</option>
                                <option value="Mid Game Account">Mid Game Account</option>
                                <option value="End Game Account">End Game Account</option>
                                <option value="5★ Limited Character Set">5★ Limited Character Set</option>
                                <option value="F2P Friendly Account">F2P Friendly Account</option>
                                <option value="Whale Account">Whale Account</option>
                                <option value="Custom">Lainnya (Custom)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga (Rp)</label>
                        <input type="number" name="harga" id="harga" required placeholder="150000" min="1">
                        <div class="input-icon">💰</div>
                    </div>
                </div>

                <div class="form-section">
                    <div class="section-title">
                        <span>📝</span> Deskripsi
                    </div>
                    
                    <div class="form-group">
                        <label for="deskripsi">Detail Akun</label>
                        <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsikan akun Anda:&#10;- Character 5★ yang dimiliki&#10;- Progress dalam game&#10;- Light Cone dan equipment&#10;- Dan informasi penting lainnya..."></textarea>
                    </div>
                </div>

                <div class="btn-container">
                    <button type="submit" name="submit" class="btn btn-primary" id="submitBtn">
                        <span>🚀</span> Upload Akun
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <span>🔄</span> Reset Form
                    </button>
                </div>
            </form>

            <div id="messageContainer">
                <!-- Messages will be displayed here -->
            </div>
        </div>
    </div>

    <script>
        // Create star field
        function createStarField() {
            const starField = document.getElementById('starField');
            for (let i = 0; i < 80; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 2 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 2 + 's';
                starField.appendChild(star);
            }
        }

        // Form submission with loading state
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.classList.add('btn-loading');
            submitBtn.innerHTML = '<div class="spinner"></div> Mengupload...';
        });

        // Custom tipe akun handling
        document.getElementById('tipe_akun').addEventListener('change', function() {
            if (this.value === 'Custom') {
                const customInput = document.createElement('input');
                customInput.type = 'text';
                customInput.name = 'tipe_akun_custom';
                customInput.placeholder = 'Masukkan tipe akun custom...';
                customInput.style.marginTop = '10px';
                customInput.style.width = '100%';
                customInput.style.padding = '15px 20px';
                customInput.style.background = 'var(--surface-bg)';
                customInput.style.border = '2px solid var(--border-color)';
                customInput.style.borderRadius = '15px';
                customInput.style.color = 'var(--text-primary)';
                customInput.style.fontSize = '1rem';
                customInput.style.fontFamily = 'Inter, sans-serif';
                
                this.parentNode.appendChild(customInput);
            } else {
                const existingCustom = this.parentNode.querySelector('input[name="tipe_akun_custom"]');
                if (existingCustom) {
                    existingCustom.remove();
                }
            }
        });

        // Price formatting
        document.getElementById('harga').addEventListener('input', function() {
            // Remove non-digits
            let value = this.value.replace(/\D/g, '');
            // Add thousand separators for display (you might want to handle this server-side)
            this.setAttribute('data-formatted', new Intl.NumberFormat('id-ID').format(value));
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createStarField();
        });

        // Show messages (simulate PHP response)
        function showMessage(type, text) {
            const container = document.getElementById('messageContainer');
            const messageClass = type === 'success' ? 'message-success' : 'message-error';
            const icon = type === 'success' ? '✅' : '❌';
            
            container.innerHTML = `
                <div class="message ${messageClass}">
                    <span>${icon}</span>
                    <span>${text}</span>
                </div>
            `;
            
            // Auto hide after 5 seconds
            setTimeout(() => {
                container.innerHTML = '';
            }, 5000);
        }

        // Simulate PHP processing (remove this in actual implementation)
        <?php if (isset($_POST['submit'])): ?>
            <?php if ($conn->query($sql) === TRUE): ?>
                showMessage('success', 'Akun berhasil diupload dan akan segera tampil di marketplace!');
            <?php else: ?>
                showMessage('error', 'Terjadi kesalahan: <?php echo addslashes($conn->error); ?>');
            <?php endif; ?>
        <?php endif; ?>
    </script>
</body>
</html>