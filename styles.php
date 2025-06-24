<style>


body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f2f5;
    color: #333;
    margin: 20px;
}

h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
}

.user-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
    padding-top: 10%;
}

.user-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    width: 220px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s ease;
}

.user-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.user-photo {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
    border: 3px solid #2980b9;
}

.user-card h2 {
    font-size: 1.2rem;
    margin-bottom: 8px;
    color: #34495e;
}

.user-card p {
    font-size: 0.9rem;
    margin: 4px 0;
    color: #555;
    text-align: justify;
}
</style>