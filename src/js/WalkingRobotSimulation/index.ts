export const robotSim = (commands: number[], obstacles: number[][]): number => {
  const path = [[0, 0]];
  let direction = 0,
    furthest = 0;

  /**
   * Decide the direction where the robot will now face.
   *
   * @param {number} command
   * @param {number} currentDirection
   * @returns {number}
   */
  const decideDirection = (command: number, currentDirection: number) => {
    // 0 == Y
    // 1 == -X
    // 2 == -Y
    // 3 == X
    switch (currentDirection) {
      case 0:
        currentDirection = command === -2 ? 1 : 3;
        break;
      case 1:
        currentDirection = command === -2 ? 2 : 0;
        break;
      case 2:
        currentDirection = command === -2 ? 3 : 1;
        break;
      case 3:
        currentDirection = command === -2 ? 0 : 2;
        break;
    }
    return currentDirection;
  };

  /**
   * Calculate the distance travelled by the robot.
   *
   * @param {number} x
   * @param {number} y
   * @returns {number}
   */
  const calculateTravelled = (x: number, y: number) => {
    return Math.pow(x, 2) + Math.pow(y, 2);
  };

  for (let i = 0; i < commands.length; i++) {
    if (commands[i] < 0) {
      // then only calculate the new direction.
      direction = decideDirection(Math.abs(commands[i]), direction);
    } else {
      // either increment x or y;
      let [x, y] = path[path.length - 1];
      switch (direction) {
        case 0:
        case 2:
          y = direction === 0 ? y + commands[i] : y - commands[i];
          break;
        case 3:
        case 1:
          x = direction === 3 ? x + commands[i] : x - commands[i];
          break;
      }
      furthest = Math.max(calculateTravelled(x, y), furthest);
      path.push([x, y]);
    }
  }

  // console.log(path);

  return furthest;
};

// const hh = robotSim([6, -1, -1, 6], []);
// const h = robotSim([6, -2, 4], []);
// const hhh = robotSim([9, -2, 2, -2, 2], []);
// console.log(hhh);
