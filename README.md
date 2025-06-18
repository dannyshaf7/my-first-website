## My First Website
Welcome to the repository for my personal blog project! Originally a simple static site, this project has evolved into a secure, interactive blog platform leveraging modern web development and AWS serverless technologies.

📄 Project Overview
This website started as a basic HTML/CSS project and has grown into a lightweight blog system. The current implementation includes:
- A static homepage and blog page.
- A secure login-protected interface for posting new blog entries.
- Blog content stored and served using AWS infrastructure.

✨ Features
- Responsive design: Adjusts layout for mobile, tablet, and desktop devices.
- User authentication: Only authorized users can submit new blog posts.
- Serverless architecture: Backend powered by AWS Lambda and API Gateway.
- Static site simplicity: Pages are still simple and fast to load, with no traditional backend server required.

🚀 Getting Started
To view or modify the site locally:
1. **Clone the repository**:
   ```bash
   git clone https://github.com/dannyshaf7/my-first-website.git
2. **Open the index.html file**:
    You can open the index.html file directly in a web browser (no server required).
3. **Make changes**:
    Edit the HTML, CSS, and JavaScript files as needed. Save and Refresh the browser to see changes.

Note: Blog posting functionality relies on live AWS services and cannot be tested locally without those configurations.

🛠️ Technologies Used
- HTML5: Markup for structuring the pages.
- CSS3: Basic styling with responsiveness.
- JavaScript: Handles blog post submission and client-side logic.
- AWS Cognito: Manages user authentication for secure blog submissions.
- AWS Lambda: Runs serverless backend code to process and store blog posts.
- AWS API Gateway: Exposes a secure HTTP endpoint that triggers Lambda and validates users.
- AWS S3: Hosts and stores the blog posts and other site assets.

🔮 Future Plans
- Add a public-facing blog post viewer with improved formatting.
- Improve mobile layout with modern CSS techniques (e.g., Flexbox, Grid).
- Add post management tools (edit/delete).
- Use Markdown for blog content input.
- Consider deploying with AWS Amplify or using CloudFront for caching.

🤝 Contributing
Have ideas or want to help improve this project? Fork the repo, create a feature branch, and submit a pull request. All contributions are welcome!

 ## License
- This project is open source and available under the MIT License.
