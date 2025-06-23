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
