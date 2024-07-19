
## 📊 Task 1: Database Design and SQL Dump

In the first task, I accomplished the following:

-  Designed an ER diagram for the database using Draw.io
-  Generated an SQL dump for the designed database

Here's the ER diagram:

![ER_diagram](https://github.com/user-attachments/assets/84716062-da3d-4fe0-834b-94a7f38b2f63)

## 🔧 Task 2: Method Optimization

For the second task, I optimized the `inefficientMethod`. The improvements include:

### Key Optimizations:

-  Using `findOrFail` for better error handling
-  Implementing eager loading with `with('certificate')` to prevent N+1 queries
-  Replacing manual loops with performant collection methods
-  Using `pluck` to directly extract certificates from courses
-  Applying `values()` to reset array keys in the returned collections

These enhancements should help boost the method's performance and improve code readability. 
