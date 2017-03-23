import io

with io.FileIO("foobar.txt", "w") as file:
    file.write("Hello!")
