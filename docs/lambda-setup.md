# AWS Lambda Function

## Wrote a Lambda function in Node.js using AWS SDK (@aws-sdk/client-s3)
		○ Accepts POST requests with blog title and content
		○ Validates and formats input
		○ Stores blog post JSON in S3 bucket with a timestamped filename

## Updated Lambda for CORS Headers
		○ Modified Lambda function to return CORS headers in every response

## Ensured client gets correct headers, even if 400/500 error


<img width="1062" alt="image" src="https://github.com/user-attachments/assets/cbfdb05e-6b91-4f93-b48c-2adb6a0a058d" />

<img width="864" alt="image" src="https://github.com/user-attachments/assets/3ad16598-4fb2-46cc-a648-dc16cd3fb71d" />

<img width="866" alt="image" src="https://github.com/user-attachments/assets/5b5d386e-dc99-451c-b47d-1a2b18ebd929" />

<img width="1154" alt="image" src="https://github.com/user-attachments/assets/41febcd2-37ed-4c7f-8330-0831bdd2cff3" />

<img width="562" alt="image" src="https://github.com/user-attachments/assets/24083e68-a011-465f-9a91-e2c2a8570104" />

<img width="337" alt="image" src="https://github.com/user-attachments/assets/1e947b2c-1f30-45e9-bf8b-60e618dd9729" />

<img width="469" alt="image" src="https://github.com/user-attachments/assets/b0401b56-2392-49bf-a807-cec0fcc5a8b2" />

<img width="863" alt="image" src="https://github.com/user-attachments/assets/15133650-bec9-4793-b8c0-ab60e53c4331" />

<img width="866" alt="image" src="https://github.com/user-attachments/assets/7bd45fbb-532b-47dc-9db4-a80a2669252e" />


## Returning to AddPost function to have it automatically add a time stamp to posts.
    - The script was there, but the field names didn't match between frontend code and the Lambda.
    - Updated the Lambda code to the correct name "timestamp" from "date".


<img width="516" alt="image" src="https://github.com/user-attachments/assets/d5313b9b-bf12-4b45-b3cf-8e44dcbe7690" />


## Navigated to blog post object in S3 to download and edit - need to add the timestamp manually. 


<img width="995" alt="image" src="https://github.com/user-attachments/assets/078cf4c0-796f-4eaa-b4f4-73ce8debd79d" />


## Updated the field name from "date" to "timestamp"

    {"title":"Blog Update 6/19/25","content":"The blog additions are up and running! We added a server-less backend with AWS services - Cognito, IAM, S3, API Gateway. Now I can post to the blog now without having to hard-code it and upload to GitHub. That's why I haven't updated since December. Signing off for now. -Sic Semper Delicatus","timestamp":"2025-06-20T03:26:21.029Z"}

## Need to reupload to replace the old JSON file with the corrected one.


<img width="980" alt="image" src="https://github.com/user-attachments/assets/82fe5263-4a23-47a8-92e9-5d1616b09a83" />

<img width="992" alt="image" src="https://github.com/user-attachments/assets/776a97b6-e4cb-4847-bcb6-e0da04f955b9" />


## AWS API Gateway
  	- Created REST API in API Gateway
  	- Defined /posts resource and
  		○ Added POST method to trigger the Lambda function
  		○ Added method with Mock Integration for CORS preflight handling
  			• The frontend code makes a cross-origin POST request
  			• Browser first sends a special preflight OPTIONS request before the actual POST to ask permission (from the server) to send the POST request with the headers from the stated origin.
  			• Mock Integration means the API Gateway handles the response without invoking the Lambda function
  			• The browser's preflight check is satisfied by the return of the predefined hardcoded headers (Origin, Methods, Headers, etc.)
  	- Used API Gateway's Enable CORS on the /posts resource
  	- Configured headers:
  		○ Access-Control-Allow-Origin: https://dbshafer.site 
  		○ Allowed Methods: OPTIONS, POST
  		○ Allowed Headers: Content-Type, Authorization
  	- Deployed to an API Stage
  		○ Created prod deployment stage in API Gateway
  		○ Added correct fetch URL to frontend code
  	- Connected add_post.html to API with fetch and tokens


<img width="965" alt="image" src="https://github.com/user-attachments/assets/cdda9ce2-6c6a-4719-82da-fa407ea05c29" />

<img width="1060" alt="image" src="https://github.com/user-attachments/assets/bb79cb3c-2fb8-4619-b419-e313d1ad45cc" />

<img width="864" alt="image" src="https://github.com/user-attachments/assets/f6384a7b-920f-49bd-9de4-4d9b82dec584" />

<img width="861" alt="image" src="https://github.com/user-attachments/assets/eae2c727-5903-4f5a-9082-91a8f1b7d0c5" />

<img width="862" alt="image" src="https://github.com/user-attachments/assets/0cdd85b1-00d4-400a-a419-79f363ad8a92" />

<img width="863" alt="image" src="https://github.com/user-attachments/assets/cad4d52f-aeda-4e44-bf45-90d315e02d3a" />

<img width="1154" alt="image" src="https://github.com/user-attachments/assets/d7489404-cc4e-40ff-8508-64cccb6ac9be" />

<img width="1407" alt="image" src="https://github.com/user-attachments/assets/cc0f4905-9af4-416f-9e57-1e4f775735b1" />

<img width="1400" alt="image" src="https://github.com/user-attachments/assets/cff18179-7a48-4d3e-bb71-a60a67b0c095" />


## All that is left now is to deploy the Lambda! 


<img width="859" alt="image" src="https://github.com/user-attachments/assets/b09dd070-8249-43e3-a503-a94352278da0" />
