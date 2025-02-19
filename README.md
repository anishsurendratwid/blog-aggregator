# Blog Aggregator Project

## Description

This project is a simple blog aggregator built with Laravel. It fetches and displays content from various blog sources.

## Prerequisites

*   [Docker](https://www.docker.com/get-started)
*   [Docker Compose](https://docs.docker.com/compose/install/)

## Setup Instructions

1. **Clone the Repostiory**

2.  **Build and start the Docker containers:**

    ```
    docker-compose up --build
    ```

    This command will:

    *   Build the necessary Docker images.
    *   Start the containers defined in your `docker-compose.yml` file (typically, this will include a web server, a PHP container, and potentially a database).

3.  **Access the application:**

    Once the containers are running, open your web browser and go to:

    ```
    http://localhost:8000
    ```

    You should see the blog aggregator application.

## Configuration

*   **Environment Variables:**  The application's configuration is managed through environment variables.  You can set these in the `.env` file.  A `.env.example` file is usually provided as a template.  Make sure to copy `.env.example` to `.env` and adjust the settings:

    ```
    cp .env.example .env
    ```

    Then, edit the `.env` file to configure your database, API keys, and other settings.

*   **Blog Sources:** The specific blog sources to aggregate are likely configured within the application's code or database.  Refer to the application's documentation or code to understand how to add or modify these sources.

## Common Issues and Troubleshooting

*   **"Address already in use" error:**  This usually means that port 8000 is already being used by another application on your system.  You can either stop the other application or change the port mapping in your `docker-compose.yml` file.

*   **Application doesn't load:** Ensure that the Docker containers have started successfully. Check the container logs for any errors. You can view the logs using:

    ```
    docker-compose logs <container_name>
    ```

    Replace `<container_name>` with the name of the container you want to inspect (e.g., `app`, `web`, `db`).

*   **Database connection errors:**  Verify that your database settings in the `.env` file are correct and that the database container is running properly.