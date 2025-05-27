<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace Honkai Star Rail</title>
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
            --warning-orange: #FF9800;
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
            max-width: 1200px;
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
            font-size: 3.5rem;
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
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            font-weight: 300;
        }

        /* Navigation */
        .nav-bar {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .nav-btn {
            background: var(--gradient-primary);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-family: 'Orbitron', monospace;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(124, 77, 255, 0.4);
            position: relative;
            overflow: hidden;
        }

        .nav-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(124, 77, 255, 0.6);
        }

        .nav-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .nav-btn:hover::before {
            left: 100%;
        }

        /* Cards Grid */
        .accounts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .account-card {
            background: var(--gradient-card);
            border-radius: 20px;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px var(--shadow-card);
            backdrop-filter: blur(10px);
        }

        .account-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(124, 77, 255, 0.3);
            border-color: var(--primary-purple);
        }

        .account-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-primary);
        }

        .account-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .account-id {
            font-family: 'Orbitron', monospace;
            font-size: 0.9rem;
            color: var(--text-accent);
            background: rgba(255, 215, 0, 0.1);
            padding: 5px 12px;
            border-radius: 15px;
            border: 1px solid var(--primary-gold);
        }

        .account-type {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
            font-family: 'Orbitron', monospace;
        }

        .account-price {
            font-size: 2rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            font-family: 'Orbitron', monospace;
        }

        .account-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 5px 15px rgba(124, 77, 255, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-accent);
            border: 2px solid var(--primary-gold);
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary:hover {
            box-shadow: 0 8px 25px rgba(124, 77, 255, 0.6);
        }

        .btn-secondary:hover {
            background: var(--primary-gold);
            color: var(--dark-bg);
        }

        /* Status Badges */
        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-available {
            background: rgba(76, 175, 80, 0.2);
            color: var(--success-green);
            border: 1px solid var(--success-green);
        }

        .status-premium {
            background: rgba(255, 215, 0, 0.2);
            color: var(--primary-gold);
            border: 1px solid var(--primary-gold);
        }

        /* Loading State */
        .loading {
            text-align: center;
            padding: 3rem;
            color: var(--text-secondary);
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid var(--border-color);
            border-top: 4px solid var(--primary-purple);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            .nav-bar {
                gap: 1rem;
            }
            
            .nav-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .accounts-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .account-card {
                padding: 1.5rem;
            }
            
            .account-actions {
                flex-direction: column;
            }
            
            .btn {
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
    </style>
</head>
<body>
    <div class="star-field" id="starField"></div>
    
    <div class="container">
        <div class="header">
            <h1>⭐ HONKAI STAR RAIL ⭐</h1>
            <p class="subtitle">Premium Account Marketplace - Trusted & Secure</p>
            
            <div class="nav-bar">
                <a href="#" class="nav-btn">🏠 Home</a>
                <a href="upload.php" class="nav-btn">📤 Upload Akun</a>
                <a href="#" class="nav-btn">🔍 Cari Akun</a>
                <a href="#" class="nav-btn">📞 Kontak</a>
            </div>
        </div>

        <div id="accountsContainer">
            <div class="loading">
                <div class="spinner"></div>
                <p>Loading akun tersedia...</p>
            </div>
        </div>
    </div>

    <script>
        // Sample data - replace with PHP data
        const sampleAccounts = [
            {
                id: 1,
                tipe_akun: "5★ Limited Character Set",
                harga: 850000,
                status: "available",
                description: "Include Kafka, Silver Wolf, Blade"
            },
            {
                id: 2,
                tipe_akun: "Starter Account Premium",
                harga: 350000,
                status: "premium",
                description: "Fresh account dengan 5★ guaranteed"
            },
            {
                id: 3,
                tipe_akun: "End Game Account",
                harga: 1500000,
                status: "available",
                description: "All content cleared, multiple 5★"
            },
            {
                id: 4,
                tipe_akun: "F2P Friendly Starter",
                harga: 150000,
                status: "available",
                description: "Perfect untuk pemain baru"
            }
        ];

        // Create star field
        function createStarField() {
            const starField = document.getElementById('starField');
            for (let i = 0; i < 100; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 3 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 2 + 's';
                starField.appendChild(star);
            }
        }

        // Render accounts
        function renderAccounts(accounts) {
            const container = document.getElementById('accountsContainer');
            
            const html = `
                <div class="accounts-grid">
                    ${accounts.map(account => `
                        <div class="account-card">
                            <div class="account-header">
                                <div class="account-id">#${account.id.toString().padStart(3, '0')}</div>
                                <div class="status-badge status-${account.status}">
                                    ${account.status === 'available' ? 'Available' : 'Premium'}
                                </div>
                            </div>
                            <div class="account-type">${account.tipe_akun}</div>
                            <div class="account-price">Rp ${account.harga.toLocaleString('id-ID')}</div>
                            <p style="color: var(--text-secondary); margin-bottom: 1.5rem; font-size: 0.9rem;">
                                ${account.description}
                            </p>
                            <div class="account-actions">
                                <a href="purchase.php?id=${account.id}" class="btn btn-primary">
                                    🛒 Beli Sekarang
                                </a>
                                <a href="detail.php?id=${account.id}" class="btn btn-secondary">
                                    👁️ Lihat Detail
                                </a>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
            
            container.innerHTML = html;
        }

        // Initialize page
        function init() {
            createStarField();
            
            // Simulate loading
            setTimeout(() => {
                renderAccounts(sampleAccounts);
            }, 1500);
        }

        // Run when page loads
        document.addEventListener('DOMContentLoaded', init);

        // Add smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>