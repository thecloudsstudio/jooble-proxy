FROM php:8.2-cli

# Install curl
RUN apt-get update && apt-get install -y curl && rm -rf /var/lib/apt/lists/*

# Copy app code
WORKDIR /app
COPY . /app

# Expose the port
EXPOSE 10000

# Start PHP's built-in server
CMD ["php", "-S", "0.0.0.0:10000", "index.php"]
