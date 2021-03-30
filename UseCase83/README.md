# Use Case 83
### Generating a *repository* actor group

This use case demonstrates how to generate a repository actor group using Prefab. Notice the only file inside `src` is a single file named `Listing.prefab.definition.yml`. For more information on how to create these files, see the [Prefab README](https://github.com/neighborhoods/Prefab/blob/8.x/README.md).

#### Getting Started
1. Navigate to the root of UseCase83 on your terminal
1. `composer install` to install the project dependencies
1. `./vendor/bin/prefab` to run Prefab and generate the Listing related actors.
    - Note to Docker For Mac users: This command can be run either inside the container or on the host machine. However, filesystem access using Docker For Mac is often extremely slow. Since Prefab writes a large number of files to disk, running Prefab inside the Docker container can take a significant amount of time. Therefore, it is recommended you run Prefab on the host machine.

Your project is now ready! Notice you now have a `fab/` directory with `Listing` machinery under `fab/V1` and general HTTP machinery under `fab/Prefab5`.
