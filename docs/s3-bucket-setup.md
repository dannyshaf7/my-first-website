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

<img width="861" alt="image" src="https://github.com/user-attachments/assets/ff766599-560e-452b-ae37-833c32731c4e" />

<img width="860" alt="image" src="https://github.com/user-attachments/assets/9c5d6cc3-c3b7-4141-84dd-6183b78a1060" />

<img width="866" alt="image" src="https://github.com/user-attachments/assets/32c14f04-25e5-4d2a-b986-cb2269894cb3" />

<img width="861" alt="image" src="https://github.com/user-attachments/assets/2d9adeb2-9416-40df-bb74-c7cba770b4ab" />

<img width="913" alt="image" src="https://github.com/user-attachments/assets/f47adcbd-8b1d-49ae-ab67-22f53862e1c6" />

<img width="932" alt="image" src="https://github.com/user-attachments/assets/51e6d0ee-2629-48c2-9306-c5ffa8b64edc" />

<img width="1081" alt="image" src="https://github.com/user-attachments/assets/b939055b-b869-434a-b63d-465a5df232c3" />



# Making blog entries in S3 viewable on webpage

## Need to make sure the objects are readable, making public for now (no secrets :)


<img width="948" alt="image" src="https://github.com/user-attachments/assets/1bc7eb6f-8468-4569-8c33-17e9351183bb" />

<img width="621" alt="image" src="https://github.com/user-attachments/assets/7d516587-b5b4-4ea8-8dd8-41148c8f9afe" />

<img width="941" alt="image" src="https://github.com/user-attachments/assets/7d79dab3-6cf7-4dfb-a4f2-d146599a8589" />



# 🔐 Why does the AWS SDK Require Auth (Even for Public Buckets)?

## When using the AWS SDK for JavaScript in the browser, any calls to AWS APIs — even to public S3 buckets — require authentication because:
    	1. SDK Talks to the S3 API, not directly to file URLs
    		○ The SDK doesn’t just open a file like a browser would.
    		○ It sends a request to the S3 REST API, which by default expects signed (authenticated) requests.
    	2. Public access works only for anonymous GET requests to object URLs
    		○ For example, fetch("https://s3.amazonaws.com/bucket/key") will work if the object is public.

## s3.listObjectsV2() or s3.getObject() using the SDK will fail unless credentials are provided — even if the object is publicly accessible.


<img width="934" alt="image" src="https://github.com/user-attachments/assets/2509ec2f-4133-46c8-b2f9-6ec0dffb8b3a" />

<img width="447" alt="image" src="https://github.com/user-attachments/assets/55fcb9c5-543f-4c83-9e23-10195d4d961a" />


## Function must be deployed, then back to IAM to create a new policy


<img width="808" alt="image" src="https://github.com/user-attachments/assets/63237a86-3d0d-4f38-ba60-afcc3cc9d01b" />

<img width="770" alt="image" src="https://github.com/user-attachments/assets/4cf536d8-894b-4e65-95c8-d84f3d70d2af" />

<img width="1037" alt="image" src="https://github.com/user-attachments/assets/8e0c7cc0-fd92-40b4-a776-10e6beb139f3" />

<img width="580" alt="image" src="https://github.com/user-attachments/assets/67414966-ad1f-414a-9490-fba3cc3d52cf" />


## Next, we ned to add a route to the API Gateway


<img width="1049" alt="image" src="https://github.com/user-attachments/assets/9d4344a0-aeed-4671-8a1a-0ac5a9b2394f" />

<img width="1029" alt="image" src="https://github.com/user-attachments/assets/ef05cde6-278b-4fe0-888f-41c1ed9619a5" />

<img width="1030" alt="image" src="https://github.com/user-attachments/assets/ffc315a6-808d-4ee3-9225-4f9115612c9e" />

<img width="1028" alt="image" src="https://github.com/user-attachments/assets/a0871761-52d8-421b-9375-e013828eb4c8" />

<img width="585" alt="image" src="https://github.com/user-attachments/assets/5c715414-1f17-4178-b3b0-181298e02928" />


## The frontend code needs the following script -- for pulling and sorting blog posts


<img width="684" alt="image" src="https://github.com/user-attachments/assets/4b323036-4fdc-4579-9632-69dec7291338" />

