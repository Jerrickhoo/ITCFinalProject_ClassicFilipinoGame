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
function openLoginModal() {
  const modal = document.getElementById("loginModal");
  modal.style.display = "flex";
}

function closeLoginModal() {
  const modal = document.getElementById("loginModal");
  modal.style.display = "none";
}

function processLogin(event) {
  event.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (username === "admin" && password === "password") {
    alert("Login successful!");
    closeLoginModal();
  } else {
    alert("Invalid username or password!");
  }
}
