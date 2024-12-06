//!=====================================================================================================================================================
//* Comment Section
//!=====================================================================================================================================================
function addComment() {
  const commentInput = document.getElementById("commentInput");
  const commentList = document.getElementById("comments");
  const commentText = commentInput.value.trim();

  if (commentText === "") {
    alert("Please write a comment before posting.");
    return;
  }

  const comment = document.createElement("li");
  comment.className = "comment";

  const avatar = document.createElement("img");
  avatar.className = "comment-avatar";
  avatar.src = "default-avatar.png"; 
  avatar.alt = "Avatar";
  comment.appendChild(avatar);

  const content = document.createElement("div");
  content.className = "comment-content";

  const userInfo = document.createElement("div");
  userInfo.innerHTML = `<span class="comment-user">User</span><span class="comment-time">${new Date().toLocaleString()}</span>`;
  content.appendChild(userInfo);

  const text = document.createElement("p");
  text.className = "comment-text";
  text.textContent = commentText;
  content.appendChild(text);

  const actions = document.createElement("div");
  actions.className = "comment-actions";
  actions.innerHTML = `
        <button onclick="likeComment(this)">👍 Like</button>
        <button onclick="dislikeComment(this)">👎 Dislike</button>
        <button>Reply</button>
    `;
  content.appendChild(actions);

  comment.appendChild(content);

  commentList.appendChild(comment);

  commentInput.value = "";
}

function likeComment(button) {
  button.textContent = "👍 Liked";
}

function dislikeComment(button) {
  button.textContent = "👎 Disliked";
}

//!=====================================================================================================================================================
//* loginModal
//!=====================================================================================================================================================
// Modal Controls
function openLoginModal() {
  document.getElementById("loginModal").style.display = "flex";
}

function closeLoginModal() {
  document.getElementById("loginModal").style.display = "none";
}

function openSignUpModal() {
  closeLoginModal();
  document.getElementById("signUpModal").style.display = "flex";
}

function closeSignUpModal() {
  document.getElementById("signUpModal").style.display = "none";
}

// Handle Login Form
document.getElementById("loginForm").addEventListener("submit", async (event) => {
  event.preventDefault();
  const email = document.getElementById("email").value;
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  const response = await fetch("auth.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: new URLSearchParams({ action: "login", email, username, password }),
  });
  const data = await response.json();
  alert(data.message);
  if (data.status === "success") closeLoginModal();
});

// Handle Sign-Up Form
document.getElementById("signUpForm").addEventListener("submit", async (event) => {
  event.preventDefault();
  const email = document.getElementById("signUpEmail").value;
  const username = document.getElementById("newUsername").value;
  const password = document.getElementById("newPassword").value;

  const response = await fetch("auth.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: new URLSearchParams({ action: "signup", email, username, password }),
  });
  const data = await response.json();
  alert(data.message);
  if (data.status === "success") closeSignUpModal();
});
