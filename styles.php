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

/* form styles */
.form-container {
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="url"],
        select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #3b82f6;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
</style>