# AWS Cognito 
## 👣 High-Level Flow with Hosted UI
## 🧭 Step-by-Step: What Happens When You Log In via Hosted UI

      1. User clicks “Login” on site → gets redirected to the Cognito Hosted UI login page.
      2. User enters credentials (handled securely by Cognito).
      3. Cognito authenticates the user.
      4. Cognito redirects the user back to site (to a “callback URL”), along with a code in the URL.
      5. Site sends the code to Cognito (from the backend or securely via JavaScript) to exchange it for tokens.
      6. Site stores the ID/access token and considers the user “logged in.”


<img width="1420" alt="image" src="https://github.com/user-attachments/assets/e210a965-3609-4295-896b-15b0b86533d9" />

<img width="863" alt="image" src="https://github.com/user-attachments/assets/3eba8514-c039-4f0c-8078-38ab917015fd" />

<img width="629" alt="image" src="https://github.com/user-attachments/assets/2ea1128c-a57f-470a-a557-41f72bf607e3" />

<img width="861" alt="image" src="https://github.com/user-attachments/assets/4333f19b-f029-4b88-bf15-7acfa8170427" />

<img width="437" alt="image" src="https://github.com/user-attachments/assets/bb117f6b-7c17-4f78-b09b-02bf7c490b50" />

<img width="1127" alt="image" src="https://github.com/user-attachments/assets/09fb6ca2-c267-457b-a9ad-e4d68ca0be84" />

<img width="863" alt="image" src="https://github.com/user-attachments/assets/24d22c74-e1d4-4bd9-92dc-6fad65468600" />

<img width="1164" alt="image" src="https://github.com/user-attachments/assets/81e21a55-07a5-450e-a10b-c46070c038bf" />

<img width="1214" alt="image" src="https://github.com/user-attachments/assets/d1e031c5-f6f2-43f4-a857-7102d9ff635e" />

<img width="633" alt="image" src="https://github.com/user-attachments/assets/703abfe8-c6d6-41b9-b130-047f9f910ae3" />

<img width="1275" alt="image" src="https://github.com/user-attachments/assets/23840b03-28fe-4c71-9eda-86b34cec15cd" />
