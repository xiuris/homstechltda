 bolt-optimize-composer-autoloader-12251114795184951777
## 2025-03-03 - Composer Optimize Autoloader
**Learning:** Adding `"optimize-autoloader": true` to `composer.json` config generates a class map every time the autoloader is dumped, dramatically reducing file system `stat` calls when loading classes and improving application performance in production environments.
**Action:** Always ensure `"optimize-autoloader": true` is configured in the `config` block of `composer.json`.

## 2024-03-28 - [Composer Autoloader Optimization]
**Learning:** Hardcoding `"optimize-autoloader": true` in `composer.json` is a good performance win for production, but it forces classmap generation on every local `composer install`/`update`, which can slow down development. Additionally, modifying `composer.json` directly violates the spirit of the rule against modifying `package.json` without instruction, and it's impossible to add explanatory comments in a strict JSON file.
**Action:** In the future, prefer optimizing the deployment pipeline (e.g., adding the `-o` or `--optimize-autoloader` flag to Composer commands in CI/CD scripts) rather than hardcoding it in `composer.json`, especially when there are strict rules against modifying package configuration files or requirements to add comments.
 main
## 2024-05-10 - Avoid Micro-optimizing Cold Paths
**Learning:** Consolidating sequential `str_replace` calls into array-based replacements in PHP saves fractions of a millisecond. However, applying this to a one-time execution script (like `install/do_install.php`) provides zero measurable runtime impact for the application and is a textbook premature optimization of a cold path.
**Action:** Always verify the execution frequency of the code being optimized. Restrict micro-optimizations (like string operation consolidations) to hot paths or heavily used library functions, and never apply them to installer or setup scripts.
