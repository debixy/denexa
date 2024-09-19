---

# Contributing to Denexa

We are excited to have you contribute to **Denexa** by **Debixy Innovations**! Whether you want to fix a bug, add new features, improve documentation, or offer feedback, your contributions are valuable to us.

## How to Contribute

### 1. Fork the Repository
Start by forking the Denexa repository to your own GitHub account. This will allow you to make changes without affecting the original project.

### 2. Clone the Forked Repository
After forking, clone the repository to your local machine.

```bash
git clone https://github.com/debixy/denexa.git
```

### 3. Create a New Branch
Always work in a new branch. Follow this naming convention for your branch:
- `feature/your-feature` for new features
- `fix/your-fix` for bug fixes
- `chore/update-x` for minor updates

```bash
git checkout -b feature/my-awesome-feature
```

### 4. Make Your Changes
Implement your feature, fix, or improvement in the appropriate files. Ensure that your code adheres to the standards mentioned below.

### 5. Test Your Changes
If your changes include functionality modifications or new features, ensure you write appropriate unit and feature tests using **Pest**.

Run the test suite to confirm everything works as expected:

```bash
php artisan test
```

### 6. Commit Your Changes
Write clear and descriptive commit messages. Follow this format:

```
feat: add new product management feature
fix: resolve issue with user login session
chore: update dependencies for performance improvements
```

### 7. Push to Your Fork
Once you're satisfied with your changes, push your branch to your forked repository.

```bash
git push origin feature/my-awesome-feature
```

### 8. Submit a Pull Request
Go to the original Denexa repository and submit a pull request. Provide a detailed description of the changes you've made, along with any relevant information that might help in the review process.

## Commit Guidelines

We follow the conventional commits format to maintain clear and descriptive commit messages:

- **feat**: A new feature.
- **fix**: A bug fix.
- **docs**: Changes to documentation.
- **style**: Code style changes (formatting, missing semicolons, etc.).
- **refactor**: Code changes that neither fix bugs nor add features.
- **test**: Adding or updating tests.
- **chore**: Maintenance or minor updates like dependency upgrades.

Examples:

- `feat: add support for user subscriptions`
- `fix: resolve issue with product price calculation`
- `chore: update Laravel to the latest version`

## Code Style

Please ensure your code adheres to the following guidelines:

- **PHP**: Follow the [PSR-12 coding standard](https://www.php-fig.org/psr/psr-12/).
- **CSS/SCSS**: Ensure SCSS follows a modular structure and uses mixins for responsiveness.
- **JavaScript/ES6**: Write clean, modular, and well-documented code.

Run `php-cs-fixer` to automatically format your code:

```bash
composer run format
```

## Testing

Denexa uses **Pest** for testing. Always write and run tests before submitting your changes:

1. **Unit Tests**: For testing individual methods and small parts of the application.
2. **Feature Tests**: For testing interactions between multiple parts of the application.

To run the test suite:

```bash
php artisan test
```

Ensure that all existing tests pass and add tests for any new functionality you implement.

## Reporting Issues

If you encounter bugs, please report them by [opening an issue](https://github.com/debixy/denexa/issues). Include as much detail as possible:
- Steps to reproduce the issue.
- Expected behavior.
- Actual behavior.
- Screenshots (if applicable).

## Suggestions and Feedback

We’re open to suggestions and new ideas! Feel free to share your thoughts by [opening an issue](https://github.com/debixy/denexa/issues) or discussing them with the community.

## Code of Conduct

By contributing to Denexa, you agree to uphold our [Code of Conduct](./CODE_OF_CONDUCT.md).

---

Thank you for contributing to Denexa! Together, we can make web development services smoother and more efficient.

---
