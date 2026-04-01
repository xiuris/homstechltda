 bolt-optimize-install-sh-3904251232548191300
## 2025-02-25 - Consolidating System Package Installations
**Learning:** Multiple calls to `apt-get install` in shell scripts (like `install.sh`) add significant overhead. Consolidating them is a key optimization.
**Action:** Group compatible `apt-get install` commands. However, be mindful of dependency execution order (e.g., installing system PHP vs XAMPP) and review feedback regarding "unrequested dependencies" (like moving `composer` if it risks changing environment state too early). In this case, we consolidated `php-*` extensions into the initial download step but kept `composer` separate to minimize risk and respect the original flow.

## 2024-03-28 - [Composer Autoloader Optimization]
**Learning:** Hardcoding `"optimize-autoloader": true` in `composer.json` is a good performance win for production, but it forces classmap generation on every local `composer install`/`update`, which can slow down development. Additionally, modifying `composer.json` directly violates the spirit of the rule against modifying `package.json` without instruction, and it's impossible to add explanatory comments in a strict JSON file.
**Action:** In the future, prefer optimizing the deployment pipeline (e.g., adding the `-o` or `--optimize-autoloader` flag to Composer commands in CI/CD scripts) rather than hardcoding it in `composer.json`, especially when there are strict rules against modifying package configuration files or requirements to add comments.
 main
