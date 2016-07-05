# Base Image
FROM php:7

# Expose port 8080
EXPOSE 8080

# Install the application to /app
COPY . /app

# Move to the /app directory
WORKDIR /app/public

# Run PHP
CMD [ "php", "-S", "0.0.0.0:8080" ]
