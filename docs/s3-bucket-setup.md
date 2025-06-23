# AWS S3
	- Created S3 bucket to hold the blog posts
		○ Same region as other resources (Lambda, API Gateway, Cognito)
		○ Unchecked "Block all public access" to serve files publicly in future
	- Set bucket policy for read access (blog entry viewing)

## Will eventually add functionality for blog page to display posts from S3 directly!

<img width="864" alt="image" src="https://github.com/user-attachments/assets/99907c4e-7da9-47c5-85a2-a2553f14c4fa" />

<img width="911" alt="image" src="https://github.com/user-attachments/assets/47596469-6154-4104-ab55-bbe45c074d8e" />

<img width="865" alt="image" src="https://github.com/user-attachments/assets/8653f1b0-f49a-4332-86d2-bcb695f8db50" />

<img width="912" alt="image" src="https://github.com/user-attachments/assets/ed73380a-7bc8-4a1f-b5e7-8b72c5b64ee0" />

<img width="861" alt="image" src="https://github.com/user-attachments/assets/b6bbd829-1333-4b2d-bfc6-1b19a5cfb208" />

<img width="860" alt="image" src="https://github.com/user-attachments/assets/02791f6b-5f70-40e4-8422-0711e82649a7" />

<img width="866" alt="image" src="https://github.com/user-attachments/assets/70ed515a-af6e-4803-b024-3c1ac563e543" />

<img width="664" alt="image" src="https://github.com/user-attachments/assets/eef01af0-8617-468b-a6a0-d5f27602c9cf" />

<img width="913" alt="image" src="https://github.com/user-attachments/assets/f47adcbd-8b1d-49ae-ab67-22f53862e1c6" />

<img width="667" alt="image" src="https://github.com/user-attachments/assets/6fa9ca2e-0b13-4487-a761-f2a036d39521" />

<img width="1081" alt="image" src="https://github.com/user-attachments/assets/b939055b-b869-434a-b63d-465a5df232c3" />



# Making blog entries in S3 viewable on webpage

## Need to make sure the objects are readable, making public for now (no secrets :)

<img width="788" alt="image" src="https://github.com/user-attachments/assets/2e0a6643-6ade-482c-8c4a-c2b9f7a2df0b" />

<img width="621" alt="image" src="https://github.com/user-attachments/assets/7d516587-b5b4-4ea8-8dd8-41148c8f9afe" />

<img width="668" alt="image" src="https://github.com/user-attachments/assets/d886b38c-acbf-4107-b61e-1291cb1d135d" />


# 🔐 Why does the AWS SDK Require Auth (Even for Public Buckets)?

## When using the AWS SDK for JavaScript in the browser, any calls to AWS APIs — even to public S3 buckets — require authentication because:
    	1. SDK Talks to the S3 API, not directly to file URLs
    		○ The SDK doesn’t just open a file like a browser would.
    		○ It sends a request to the S3 REST API, which by default expects signed (authenticated) requests.
    	2. Public access works only for anonymous GET requests to object URLs
    		○ For example, fetch("https://s3.amazonaws.com/bucket/key") will work if the object is public.

## s3.listObjectsV2() or s3.getObject() using the SDK will fail unless credentials are provided — even if the object is publicly accessible.


<img width="934" alt="image" src="https://github.com/user-attachments/assets/2509ec2f-4133-46c8-b2f9-6ec0dffb8b3a" />

<img width="725" alt="image" src="https://github.com/user-attachments/assets/38a5d74c-44f7-4023-8c3f-0a2132f7eb48" />


## Function must be deployed, then back to IAM to create a new policy

<img width="667" alt="image" src="https://github.com/user-attachments/assets/801a7423-2c23-4b6e-8445-438539444d20" />

<img width="665" alt="image" src="https://github.com/user-attachments/assets/05b93276-cbbf-420f-b194-fa9f2243ee77" />

<img width="668" alt="image" src="https://github.com/user-attachments/assets/2a0ab8f9-36b3-4650-8f43-9a58eb13bbb3" />

<img width="664" alt="image" src="https://github.com/user-attachments/assets/d8a90436-b024-4f80-802d-20261d35a05b" />


## Next, we ned to add a route to the API Gateway


<img width="667" alt="image" src="https://github.com/user-attachments/assets/b40ab343-5078-4da3-ba1f-1031601427df" />

<img width="1029" alt="image" src="https://github.com/user-attachments/assets/ef05cde6-278b-4fe0-888f-41c1ed9619a5" />

<img width="666" alt="image" src="https://github.com/user-attachments/assets/b3055f94-9eec-4268-9db4-b5a365e0e9a8" />

<img width="1028" alt="image" src="https://github.com/user-attachments/assets/a0871761-52d8-421b-9375-e013828eb4c8" />

<img width="585" alt="image" src="https://github.com/user-attachments/assets/5c715414-1f17-4178-b3b0-181298e02928" />


## The frontend code needs the following script -- for pulling and sorting blog posts


<img width="684" alt="image" src="https://github.com/user-attachments/assets/4b323036-4fdc-4579-9632-69dec7291338" />

