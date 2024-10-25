<h1>Backend Project</h1>

<p>This repository contains the backend code for our project, built using Laravel.</p>

<h2>Getting Started</h2>
<p>Follow these steps to set up and run the backend project locally.</p>

<h3>Prerequisites</h3>
<ul>
  <li>Ensure PHP, Composer, and a compatible database (e.g., PostgreSQL) are installed.</li>
</ul>

<h3>Installation</h3>
<ol>
  <li><strong>Clone the Repository</strong>
    <pre><code>git clone https://github.com/kufle/task-manager-backend</code></pre>
  </li>
  <li><strong>Copy and Configure Environment File</strong>
    <ul>
      <li>Copy the <code>.env.example</code> file and rename it to <code>.env</code>.</li>
      <li>Set the database configurations in the <code>.env</code> file:
        <ul>
          <li><code>DB_CONNECTION</code></li>
          <li><code>DB_HOST</code></li>
          <li><code>DB_PORT</code></li>
          <li><code>DB_DATABASE</code></li>
          <li><code>DB_USERNAME</code></li>
          <li><code>DB_PASSWORD</code></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><strong>Generate Application Key</strong>
    <pre><code>php artisan key:generate</code></pre>
  </li>
  <li><strong>Run Migrations</strong>
    <pre><code>php artisan migrate</code></pre>
  </li>
  <li><strong>Start the Development Server</strong>
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<h3>Usage</h3>
<p>After starting, the project will be available at <code>http://localhost:8000</code> (or the default port set in the project).</p>
