## 2024-05-18 - [Initial Learnings]
**Learning:** Only `.bat`, `.sh`, `.sql`, `.php`, `.md`, and `.json` files are directly accessible via codebase root. Most files appear to reside in an `application/` directory which needs to be downloaded or handled per instructions.
**Action:** Be aware that standard CodeIgniter folders might be missing and focus optimizations on available files. Do not optimize installer files (`install.sh`, `install.bat`, `install/do_install.php`) as they are "cold paths" executed only once.

## 2024-05-18 - [Autoloader Optimization]
**Learning:** In a CodeIgniter/Composer hybrid setup, enabling `optimize-autoloader` in `composer.json` is crucial for production performance, as it generates class maps and avoids redundant file system `stat` calls during class autoloading.
**Action:** Always ensure `"optimize-autoloader": true` is present in the `config` block of `composer.json` for such projects.
